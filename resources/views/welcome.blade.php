<x-layout>

 
    <header class="masthead">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 text-center background">
              <h1 class="bold text">PIETRAVIVA HOUSE</h1>
              <h3 class="bold">Alloggi di qualità</h3>
            </div>
          </div>
        </div>
      </header>
      
      <div class="my-2">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
      </div>
     
          <!-- servizi struttura -->
    <div class="container mt-4">
      <div class="row">

          <!-- prima colonna -->
          <div data-aos="fade-right" class="col-12 col-md-4">
              <img src="./media/servizi/bathroom.png" alt="">
              <h5>Bagno</h5>
              <ul>
                  <li>Carta Igienica</li>
                  <li>Asciugamani</li>
                  <li>Vasca o doccia</li>
                  <li>WC</li>
                  <li>Prodotti da bagno in omaggio</li>
                  <li>Accappatoio</li>
                  <li>Doccia</li>
              </ul>
              <img src="./media/servizi/bed.png" alt="">
              <h5>Camera da letto</h5>
              <ul>
                  <li>Biancheria per la casa</li>
                  <li>Armadio o guardaroba</li>
              </ul>
              <img src="./media/servizi/freesia.png" alt="">
              <h5>Spazi all'aperto</h5>
              <ul>
                  <li>Arredamento da esterni</li>
                  <li>Terrazza</li>
              </ul>
              <img src="./media/servizi/kitchen-set.png" alt="">
              <h5>Cucina</h5>
              <ul>
                  <li>Cucina in comune</li>
                  <li>Lavatrice</li>
              </ul>
              <img src="./media/servizi/bed.png" alt="">
              <h5>Servizi in camera</h5>
              <ul>
                  <li>Presa elettrica vicino al letto</li>
                  <li>Letto pieghevole</li>
                  <li>Stand appendiabiti</li>
              </ul>
          </div>

          <!-- seconda colonna -->
          <div data-aos="fade-left" class="col-12 col-md-4">
              <img src="./media/servizi/sofa.png" alt="">
              <h5>Servizi in camera</h5>
              <ul>
                  <li>Zona soggiorno</li>
              </ul>
              <img src="./media/servizi/television.png" alt="">
              <h5>Servizi in camera</h5>
              <ul>
                  <li>Tv a schermo piatto</li>
                  <li>Canali italiani</li>
              </ul>
              <img src="./media/servizi/kitchen-set.png" alt="">
              <h5>Servizi di ristorazione</h5>
              <ul>
                  <li>Caffetteria sul posto</li>
              </ul>
              <img src="./media/servizi/application.png" alt="">
              <h5>Altri servizi</h5>
              <ul>
                  <li>Armadietti</li>
                  <li>Check-in e check-out privati</li>
                  <li>Ddeposito bagagli</li>
                  <li>Check-in e check-out express</li>
                  <li>Reception 24 ore su 24</li>
                  <li>Internet WiFi disponibile gratuitamente nelle camere. </li>
              </ul>
          </div>

          <!-- terza colonna -->
          <div data-aos="fade-up" class="col-12 col-md-4">
              <img src="./media/servizi/information-button.png" alt="">
              <h5>Servizi generali</h5>
              <ul>
                  <li>Minimarket sul posto</li>
                  <li>Area fumatori</li>
                  <li>Aria condizionata</li>
                  <li>Struttura interamente non fumatori</li>
                  <li>Zanzariera</li>
                  <li>Pavimento in marmo o in piastrelle</li>
                  <li>Riscaldamento</li>
                  <li>Dsponibilità di camere familiari</li>
                  <li>Ferro e asse da stiro</li>
                  <li>Camere non fumatori</li>
                  <li>Ferro da stiro</li>
              </ul>
              <img src="./media/servizi/language.png" alt="">
              <h5>Lingue parlate</h5>
              <ul>
                  <li>Italiano (madrelingua)</li>
                  <li>Inglese</li>
              </ul>
          </div>
      </div>
  </div>


 <x-footer/>
          
    
</x-layout>