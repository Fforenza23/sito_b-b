<x-layout>
    <x-navbar />
    <main>
        <div class="pagechi">
            <div class="mainsec">
                <div>
                    <h3>DOVE SIAMO</h3>
                </div>
                <div class="imgIframe">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3000.901828158683!2d16.064065533697928!3d41.22390980563627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13383c8172bc97f1%3A0x3d4e02c58a62eb54!2sB%26B%20Canosa%20%22Casa%20di%20Nonna%20Lia%22!5e0!3m2!1sit!2sit!4v1715876650844!5m2!1sit!2sit"
                        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="containerSVG">
                    <div class="Svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                            class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path
                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        </svg>
                        <div class="infoSvg">
                            <h5>Via Fabrizio Rossi, 56<br>
                                76012 Canosa di Puglia (BT)</h5>
                        </div>
                    </div>
                    <div class="Svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                            class="bi bi-telephone" viewBox="0 0 16 16">
                            <path
                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                        </svg>
                        <div class="infoSvg">
                            <h5>info@casadinonnalia.it <br>
                                + 39 327 6825798</h5>
                        </div>
                    </div>
                </div>
                <div class="mainsec">
                    <h3>COME RAGGIUNGERCI</h3>
                    <div class="infoRoad">
                        <div style="display: flex">
                            <div style="flex:1;text-align: center;">
                                <p class="copy2">In Aereo:</p>
                            </div>
                            <div style="flex:3;text-align: center;">
                                <p class="copy"> Aeroporto di Bari/Palese “Aeroporto Karol Wojtyła” dista circa 45 min
                                    in auto.
                                    Aeroporto di Foggia “Gino Lisi” dista circa 30 min in auto</p>
                            </div>
                        </div>
                        <div style="display: flex">
                            <div style="flex:1;text-align: center;">
                                <p class="copy2">In Auto:</p>
                            </div>
                            <div style="flex:3;text-align: center;">
                                <p class="copy"> Uscita Canosa di Puglia
                                    dall'Autostrada
                                    A14, seguire le indicazioni
                                    per Canosa. Percorrere via Giovanni Bovio e svoltare a destra in Via Fabrizio Rossi.
                                </p>
                            </div>
                        </div>
                        <div style="display: flex">
                            <div style="flex:1;text-align: center;">
                                <p class="copy2">In Treno:</p>
                            </div>
                            <div style="flex:3;text-align: center;">
                                <p class="copy"> Stazione di Barletta e coincidenza con autobus sostitutivo
                                    Trenitalia.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="tabAside">
                    <div class="asidesec">
                        <h4>CONTATTACI</h4>
                        <div class="sectionForm ">
                            <form action="" class="backg">
                                @csrf
                                <div class="backg divForm ">
                                    <label class="backg" for="name">Nome</label>
                                    <input type="text" class="backg" name="name" id="name"
                                        aria-describedby="emailHelp">
                                    @error('name')
                                        <div class="alert alert-danger"
                                            style="height: 30px;display:flex;justify-content:center;align-items:center;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="divForm backg">
                                    <label for="name" class="backg">telefono</label>
                                    <input type="number" name="name" id="name" aria-describedby="emailHelp"
                                        class="backg">
                                    @error('name')
                                        <div class="alert alert-danger"
                                            style="height: 30px;display:flex;justify-content:center;align-items:center;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="divForm backg">
                                    <label for="exampleInputEmail1" class="backg">Email</label>
                                    <input type="email" name="email" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" class="backg">
                                </div>
                                @error('email')
                                    <div class="alert alert-danger"
                                        style="height: 30px;display:flex;justify-content:center;align-items:center;">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="divForm backg">
                                    <label for=""class="backg">Messaggio</label>
                                    <input type="text" id="myTextBox"class="backg textMessForm" name="myTextBox"
                                        placeholder="Inserisci qui il tuo testo">
                                </div>
                                <div class="btnForm">
                                    <button type="submit" style="width: 70%;">INVIA</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>
    <x-footer />
</x-layout>
