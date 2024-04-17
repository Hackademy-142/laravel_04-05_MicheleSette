<x-layout>

    {{-- header --}}
    <header class="masthead">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 text-center background">
              <h1 class="bold text">PIETRAVIVA HOUSE</h1>
              <h3 class="bold">CONTATTACI</h3>
            </div>
          </div>
        </div>
      </header>

      <h2 class="text-center mt-5 text-black-50  ">Compila il form e sarai ricontattato</h2>

      {{-- form contatto --}}
      <section class="container my-5 ">
        <div class="row justify-content-center ">
            <div class="col-10 col-md-6 bg">
                <form class="bg" method="POST" action="{{ route('contact.submit')}}">
                    @csrf
                  <div class="mb-3">
                    <label for="username" class="form-label">Nome e Cognome</label>
                    <input name="username" type="text" class="form-control" id="username" placeholder="Mario Rossi">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Inserisci la tua Email</label>
                    <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>                  
                  <div class="mb-3">
                    <label for="message" class="form-label">Descrivi le tue esigenze</label>
                    <textarea name="message" class="form-control" id="message" rows="3"></textarea>
                  </div>
                  <div class="col-auto">
                    <button type="submit" class="btn btn-dark  mb-3">Invia</button>
                  </div>
                
                </form>
            </div>
        </div>
      </section>


    <x-footer/>
</x-layout>