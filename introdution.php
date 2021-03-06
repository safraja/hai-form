<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet'
              href='https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/styles/atom-one-light.min.css'>
        <link rel='stylesheet'
              href='https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/styles/androidstudio.min.css'
              media='(prefers-color-scheme: dark)'>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js'></script>
        <script>hljs.highlightAll();</script>
        <link rel='stylesheet' href='./style/style.css'>
        <link rel='stylesheet' href='./hai-input.css'>
        <link rel='stylesheet' href='./hai-input-dark.css' media='(prefers-color-scheme: dark)'>
        <script src='./js/main.js'></script>
        <title>Hai Form</title>
        <!--<script src="https://unpkg.com/vue@next"></script>-->
        <script type='module'>
            //import { defineCustomElement } from 'https://cdn.jsdelivr.net/npm/vue@3.2.19/dist/vue.esm-browser.js';
            import {register} from './hai-input.js';
            register();
        </script>
    </head>
    <body>
        <header>
            <h1>Hai Form</h1>
            <div>
                <a href='https://github.com/safraja/hai-form' class='github-link'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path>
                    </svg>
                    <span>GitHub</span>
                </a>
            </div>
            <nav>
                <ul id='main-menu'>
                    <li class='active'><a href='./introdution.php'>P??edstaven??</a></li>
                    <li><a href='./'>Demo</a></li>
                    <li><a href='./demo-vue.php'>Demo (Vue.js)</a></li>
                </ul>
            </nav>
        </header>
        <div id='container'>
            <main class='centered'>
                <div class='main-text-container'>
                    <h2>P??edstaven??</h2>
                    <p>
                        Hai Form je open source javascriptov?? knihovna poskytuj??c?? z??kladn?? ??e??en?? pro nejb????n??j???? pot??eby
                        formul????ov??ch pol??. Jej??m z??m??rem je pokr??t co nejv??ce typ?? pol??, aby v??voj????i
                        webov??ch str??nek nemuseli p??i vytv????en?? formul?????? pou????vat velk?? mno??stv?? extern??ch knihoven.
                    </p>

                    <h3>Co Hai Form nab??z??</h3>
                    <h4>6 typ?? pol??</h4>
                    <p>
                        V sou??asn?? verzi podporuje Hai Form 6 typ?? formul????ov??ch pol??: textov??, ????seln??, URL,
                        p??ep??na??, rozbalovac?? nab??dku (select) a nahr??vac?? pole pro soubory. Ka??d?? z t??chto typ??
                        nab??z?? funkcionality, kter?? nejsou dostupn?? ve standardn??ch formul????ov??ch pol?? HTML5, a z??rove??
                        m?? ka??d?? z uveden??ch typ?? i ??adu nastaviteln??ch parametr??, kter??mi lze fungov??n?? pole ovlivnit.
                    </p>
                    <div class='types-table'>
                        <span>Text</span>
                        <span>Number</span>
                        <span>URL</span>
                        <span>Switch</span>
                        <span>Select</span>
                        <span>File</span>
                    </div>

                    <h4>2 barevn?? t??mata</h4>
                    <p>
                        Hai Form nab??z?? sv??tlou i tmavou verzi pro v??echny podporovan?? typy pol??.
                    </p>
                    <div class='two-images-example'>
                        <div class='image-example'>
                            <img src='./images/light-theme.jpg' alt=''>
                        </div>
                        <div class='image-example'>
                            <img src='./images/dark-theme.jpg' alt=''>
                        </div>
                    </div>

                    <h4>2 zp??soby implementace</h4>
                    <p>
                        Knihovnu Hai Form lze pou????vat bu?? nap????mo prost??ednictv??m ??ist??ho javascriptu, nebo
                        pomoc?? frameworku <a href='https://vuejs.org/'>Vue.js</a> p??es custom HTML elementy.
                    </p>
                    <div class='two-codes-example'>
                        <pre>
<code class="language-html"><?php echo htmlspecialchars(file_get_contents('./code-examples/basic/example-1.html')); ?></code>
                        </pre>
                        <pre>
<code class="language-html"><?php echo htmlspecialchars(file_get_contents('./code-examples/vue/example-1.html')); ?></code>
                        </pre>
                    </div>

                    <h4>Podporu data atribut??</h4>
                    <p>
                        P??i pou??it?? knihovny Hai Form pomoc?? ??ist??ho javascriptu lze hodnoty parametr?? pole
                        nastavovat prost??ednictv??m stejnojmenn??ch atribut?? s prefixem <code>data-</code>
                    </p>
                    <div class='one-code-example'>
                        <pre>
<code class="language-html">&lt;input id='test' name='test' value='' type='text' data-label='Test 1'
       data-mask='000 - AAA'  data-placeholder='000 - AAA'&gt;</code>
                        </pre>
                    </div>

                    <h3>Jak Hai Form funguje</h3>
                    <p>
                        Jakmile je na ur??it?? input zavol??na funkce <code>HaiInput.create()</code>, je dan?? pole automaticky
                        p??etvo??eno na formul????ov?? pole knihovny Hai Form. V r??mci tohoto procesu se pro dan?? pole vytvo???? "dvoj??e"
                        v podob?? skryt??ho textov??ho inputu, do kter??ho jsou p??en????en?? hodnoty z pole
                        knihovny Hai Form. Spolu s t??m se do n??kter??ho z element?? (v z??vislosti na typu pole) vygenerovan??ho
                        pole knihovny Hai Form ulo???? objekt HaiInput, kter?? obsahuje v??echny kl????ov?? hodnoty i funkce
                        dan??ho pole a lze ho p??es n??j upravovat i po ??vodn?? inicializaci.
                    </p>
                    <h3>Informace k jednotliv??m typ??m pol??</h3>
                    <h4>Textov?? pole</h4>
                    <p>
                        Hlavn??m p????nosem textov??ho pole knihovny Hai Form je mo??nost nastaven?? masky ur??uj?? podobu,
                        kterou m?? m??t zadan?? text. To je vhodn?? kup????kladu pro pole, do kter??ho m?? b??t zad??na
                        registra??n?? zna??ka vozu nebo t??eba ????slo kreditn?? karty. Oproti regul??rn??m v??raz??m
                        zad??van??m p??es atribut pattern m?? maska tu v??hodu, ??e v??bec nepovol?? naps??n?? nevyhovuj??c??ch
                        znak?? a automaticky dopl??uje ty, kter?? jsou pevn?? dan??, kup????kladu poml??ky nebo mezery.
                    </p>
                    <h4>????seln?? pole</h4>
                    <p>
                        Pro u??ivatele je daleko p????jemn??j????, kdy?? se ????slo form??tuje do tvaru, kter?? je l??pe ??iteln??
                        a odpov??d?? tomu, na co je u??ivatel zvykl??. Stejn?? tak je vhodn??, kdy?? je do ????seln??ho
                        pole mo??n?? zkop??rovat ji?? n??jak??m zp??sobem form??tovan?? ????sla kup????kladu z aplikace MS
                        Excel. P??esn?? tyto funkce knihovna Hai Form pro ????seln?? pole nab??z??.
                    </p>
                    <h4>URL pole</h4>
                    <p>
                        Standardn?? inputy typu URL nab??z?? pouze velmi omezenou kontrolu validity zadan?? adresy.
                        Naproti tomu knihovna Hai Form umo????uje povolen?? nebo naopak z??kaz jednotliv??ch ????st??
                        URL adresy jako je port, u??ivatelsk?? jm??no a heslo, nebo cesta. Stejn?? tak je mo??n?? povolit pouze
                        specifick?? seznam protokol?? a vybrat protokol, kter?? m?? b??t automaticky dopl??ov??n, pakli??e
                        u??ivatel ????dn?? neuvede.
                    </p>
                    <h4>P??ep??na??</h4>
                    <p>
                        P??ep??na?? je typ pole, kter?? je velmi zn??m?? a b????n?? pou????van?? zejm??na na mobiln??ch za????zen??ch,
                        ale HTML5 ho ve sv??m z??kladu nenab??z??. Proto knihovna Hai Form toto pole p??id??v??, a to rovnou
                        ve dvou variant??ch, kdy m????e u??ivatel vyb??rat bu?? ze dvou, nebo v??ce hodnot.
                    </p>
                    <h4>Rozbalovac?? nab??dka</h4>
                    <p>
                        Oproti tradi??n??m select??m nab??z?? rozbalovac?? nab??dka knihovny Hai Form ??adu vylep??en??
                        zahrnuj??c??ch zejm??na responzivn?? zobrazen??, mo??nost filtrov??n?? polo??ek nab??dky na z??klad??
                        zadan??ho textu, na??ten?? dat z extern??ho JSON souboru a v??razn?? u??ivatelsky p????v??tiv??j????
                        rozhran?? pro nab??dky s mo??nost?? v??b??ru v??ce ne?? jedn?? polo??ky.
                    </p>
                    <h4>Nahr??vac?? pole pro soubory</h4>
                    <p>
                        Nahr??vac?? pole je v knihovn?? Hai Form realizov??no odli??n?? oproti v??t??in?? javascriptov??ch
                        knihoven jako je kup????kladu <a href='http://dropzone.dev'>Dropzone</a>. Na rozd??l od nich
                        neum?? nahr??vac?? pole v knihovn?? Hai Form samo uploadovat soubory na server, ale funguje
                        prakticky jako grafick?? rozhran?? pro klasick?? input typu file, kter?? se odes??l??
                        norm??ln?? se zbytkem formul????e.
                    </p>
                    <p>
                        Mimo z??kladn?? funkci Drag & Drop nab??z?? nahr??vac?? pole v knihovn?? Hai Form nav??c je??t??
                        mo??nost nastavit parametry omezuj??c?? kup????kladu maxim??ln?? po??et vybran??ch soubor??,
                        jejich velikost, nebo jejich povolen?? form??ty.
                    </p>
                </div>
            </main>
            <footer id='container-footer'>

            </footer>
        </div>
    </body>
</html>