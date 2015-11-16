
<html>
<!DOCTYPE html>
<!--HTML elemendid (v.a need, mis pole toetatud HTML5-s) -->
<head>
    <meta charset="UTF-8">
    <base href="Media/" target="_blank">
    <link type="text/css" rel="stylesheet" href="disain.css"/>
    <style>
        p {color:red;}
    </style>
    <title>
        Tagide töö
    </title>
</head>

<body>

<address>
    <a href="https://www.facebook.com/heigo.kure"><b>Heigo Kure</b></a>.<br>
    <br>
    <a href="www.youtube.com/wompdoo"><abbr title="Youtube">Youtube</abbr></a><br>
</address>

<hr>

<p>Kas olla? <dfn>Olla</dfn>- Ikka olla</p>

<div id="div_dialog">
    <dialog id="dialog"open>Mis möll on?</dialog>
</div>

<br>
<br>
<br>

<div id="audio_div">
    <audio id="rage" controls>
        <source src="muss/RageTheNight.mp3" type="audio/mpeg">

    </audio>
</div>

<h4 id="heading4">Aias sadas saia<bdo dir="rtl">Sai</bdo></h4>

<h5 id="heading5">Kes see su siis sisse lasi? <bdo dir="rtl">kes</bdo></h5>

<h6><cite>„Teema“</cite> Autod</h6>

<blockquote id="quote" cite="https://en.wikipedia.org/wiki/Car">
    A car is a wheeled, self-powered motor vehicle used for transportation.
    The word "car" is believed to originate from the Latin word carrus or carrum ("wheeled vehicle")
</blockquote>

<code>Erinevad Fordi mudelid</code>

<input list="fords" name="ford">

<datalist id="fords">
    <option value="Mustang">
    <option value="GT">
    <option value="Focus ST">
    <option value="Raptor 150">
</datalist>
<input type="submit">

</form>

<dl>
    <dt>teema</dt>
    <dd>Bla Bla bla.</dd>
    <dt>Täis Bla</dt>
    <dd>Bla bla bla Bla BLA.</dd>
</dl>

<p>Kuis on, kas <del>nobe</del> <ins>kahtlane</ins>?</p>

<p>The &lt;mark&gt; element is used to
    <mark>highlight</mark>
    text
</p>

<br>

<details>
    <summary>Kas pähkel põrkab?</summary>
    <p> <em>Põrkab!</em> Tubli sul ikka põrkab küll</p>
</details>

<p>Kas olla? <dfn>Olla</dfn>- Ikka olla</p>

<div id="div_dialog">
    <dialog id="dialog"open>Mis möll on?</dialog>
</div>

<br>
<br>
<br>

<dialog id="dialog2"open>Jõhker möll on!</dialog>

<br>
<br>
<br>

<blockquote id="quote" cite="https://en.wikipedia.org/wiki/Car">
    A car is a wheeled, self-powered motor vehicle used for transportation.
    The word "car" is believed to originate from the Latin word carrus or carrum ("wheeled vehicle")
</blockquote>

<main>
    <article>
        <header>
            <h1>Ford Mustang </h1>
            <p>Vajutades auto veljele, saad liikuda <bdi> Fordi </bdi> lehele,vajutades esitulele saad teada Fordi ajaloo kohta</p>
        </header>
    </article>

    <figure>
        <img id="ford_pic" src="pics/Mustang.jpg" width="640" height="360" usemap="#mustang">
        <figcaption>Ford Mustang</figcaption>
    </figure>

    <map name="mustang">
        <area shape="poly" coords="441,228,428,241,428,251,424,271,425,287,428,302,440,305,448,290,452,267,452,241,450,234" href="http://www.ford.com/cars/mustang/" alt="velg">
        <area shape="poly" coords="342,220,354,232,397,231,411,214" href="https://en.wikipedia.org/wiki/Ford_Mustang" alt="tuli">
    </map>

    <aside>
        <h2>Ford Mustangil 5L 350hp V8 mootor, mille tippkiirus 250km/h </h2>
        <h3>Ford Mustangit on toodetud 1964 aastast.</h3>
    </aside>

</main>

<embed id="embed" src="pics/hitler.jpg" type="image/jpg"/>

<img id="embed2" src="pics/abe.jpg" type="image/jpg" width="400px"/>

<img id="embed3" src="pics/nic.jpg" type="image/jpg" width="400px"/>



<iframe src="https://en.wikipedia.org/wiki/Car"></iframe>

<form>
    <label for="age">PW(Top Secret)</label>
    <input type="text" name="age" id="age"><br>
    We Dem Boyz: <keygen name="security">
</form>

<kbd>Keyboard input</kbd>

<div class="divis">
    <ruby id="ruby">?
        <rt>
            <rp>(
            </rp>
            ELOHELLL
            <rp>)
            </rp>
        </rt>
    </ruby>
</div>

<br>

<label for="radiobutton">Radio gaga Button</label>

<input type="radio" name="button" id="radiobutton" value="button"><br>


<menu type="toolbar" id="mymenu">
    <menuitem label="faccer" icon="pictures/FB.png" onclick="window.open('//facebook.com/sharer/sharer.php?u=' + window.location.href);">
    </menuitem>
</menu>

<meter value="0.69">69%</meter>


<script>
    document.write("Scripti kiri")
</script>

<br>
<br>

<noscript>Scripter scripter VAC ban</noscript>



<select id="selection">
    <optgroup label="Olek">
        <option value="Vesi">Vesi</option>
        <option value="Jaa">Jää</option>
    </optgroup>
</select><br><br>

<form id="a_plus_b" oninput="x.value=parseInt(a.value)+parseInt(b.value)">
    <label for="a">Mitut kilplast arvad et vaja on selleks, et lambil pirni vaja vahetada</label> +
    <label for="b">Mitut venelast on vaje et lambi pirni vahetada</label> = Kokku on vaja kilplasi ja venelasi nii plaju: <br>
    <input type="number" id="a" value="0">
    +<input type="number" id="b" value="0">
    =<output name="x" for="ab"></output>
</form>

<pre id="pre">
    Kõik jääb chilliks
</pre>

<br>
<br>
<img id="arab" src="pics/arab.jpg" type="image/jpg"/>
<form>
    <fieldset>
        <legend>Araablase nimi:</legend>
        <label for="name">Allah</label>
        <input type="text" name="name" id="name"><br>
        <label for="email">Abdul</label>
        <input type="text" name="email" id="email"><br> <br>
        <button type="button">Allahu Akbar</button>
    </fieldset>
</form>

<textarea id="txt_area" rows="5">Siin on mu elulugu, ärge haitige</textarea>

<progress id="progress_bar" value="69" max="100">69/100</progress>

<div id="only_span"><h1>Peeter eeter termomeeter</h1>
    <wbr>
    <q>Ei no tegelt oli peeter norm sell
        <wbr>
        kuid nüüd on tha lahkunud meie seast
        <wbr>
        kuigi ma tead ei teadnud,
        <wbr>
        arvan, et ta oli parim sõber.
        <wbr>
        aga tegelt tahaks teada
        <wbr>
        Kas keegi mind Tartusse saaks viia.</q>
</div>

<br>
<br>

<div class="divis">
    <ruby id="ruby">?
        <rt>
            <rp>(
            </rp>
            ELOHELLL
            <rp>)
            </rp>
        </rt>
    </ruby>
</div>

<div id="add_head1">
    <h1>Paneme pidu nagu täiega(NOT)</h1>
</div>

<br>

<div id="paragr"><p><s>Kas keegi kuuleb</s> Vist mitte</p></div>

<div class="divis" id="samp">
    <samp>Kast
        <strong>Kast kast
        </strong>, kast kast kast
        Kast Kast Kast kast
    </samp>
</div>

<p id="methane">Tetrahüdrokannabinoidiga  on THC
    <sub>Agent 47
    </sub>
</p>

<br>

<p id="equation">a+b+c=f
    <b>ax
        <sup>a+b+c=f
        </sup>+ a+b+c=f
    </b>
</p>

<table id="table" border="2px">
    <caption>Mehiklane Ameeriklane Eestlane venelane</caption>

    <colgroup>
        <col span="2">
    </colgroup>

    <thead>
    <tr>
        <th>Mehiklane Ameeriklane Eestlane venelane.</th>
    </tr>
    </thead>

    <tfoot>
    <tr>
        <td>Mehiklane</td>
        <td>Eestlane</td>
    </tr>
    </tfoot>

    <tbody>
    <tr>
        <td>
            1. Ameeriklane
        </td>
        <td>
            1. Venelane
        </td>
    </tr>
    <tr>
        <td>
            2. Eestlane
        </td>
        <td>
            2. Mehiklane
        </td>
    </tr>
    </tbody>

</table>

<br>


<p>Mina olen sündinud:
    <time datetime="1995-06-24 21:41">Jaanipäeval
    </time>
    .
</p>

<br>

<div class="heading1">
    <h1>HELEOLEO</h1>
</div>

<video id="video" controls>
    <source src="vid/KingBach.mp4" type="video/mp4">
</video>

<p id="jama">see tekst on mõtetu!
    <u>MÕTETU!</u>
</p>

<p id="useful"> See tekst ei ole kasulik < u >.</p>

<var>Mittekasulik.</var>

<div id="toit">
    <ul> Pitsa
        <li>Kartul
            <ol>Kana
                <li id="list_item">Siga
                </li>
                <li> Makaron
                </li>
            </ol>
        </li>
        <li>Juust
            <ol>Seen
                <li>Lehm
                </li>

                <li> Tatar
                </li>
            </ol>
        </li>
    </ul>
</div>
<ul id="uno">
    <li>
        WUT
    </li>
    <li>WUT</li>
</ul>
<ol id="o">
    <li>AYY</li>
    <li>LMAO</li>
</ol>

<div id="try_counter">

    <h1>Mingi värk</h1>

    <h2>mingi värk vol 2</h2>

    <h3>Mingi värk vol 3</h3>

</div>

<marquee id="marq" direction="left">
    <marquee behavior="alternate">
        <img src="pictures/minion.jpg"/>
    </marquee>
</marquee>

<section>
    <footer id="footer">
        <p>
            <small>Created by</small>
            <i>
                <mark>DJ Ryan Angelos</mark>
            </i></p>
    </footer>
</section>


<table id="table2" border="4px">
    <tr>
        <th>Mehiklane Ameeriklane Eestlane venelane.</th>
    </tr>
    <tr>
        <td>
            1. Mehiklane
        </td>
        <td>
            1. Ameeriklane
        </td>
    </tr>
    <tr>
        <td>
            2. Eestlane
        </td>
        <td>
            2. Venelane
        </td>
    </tr>
</table>

</body>


</html>
