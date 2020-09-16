<?php
/*
  This file is part of gitBible.

  Copyright 2020 David Stansfield (www.davidstansfield.id.au).

  gitBible is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  gitBible is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with gitBible.  If not, see <https://www.gnu.org/licenses/>.
*/
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  body {
    background-color: black;
    color: silver;
  }
  a, a:visited {
    color: lightblue;
  }
  h1, h2, h3 {
    color: gray;
  }
  span.comment {
    display: none;
  }
  .sblgnt {
    display: none;
  }

  .sblgntt {
    display: none;
  }

  .ngvw {
    display: none;
  }

  #translationSelection {
    padding: 0;
  }

  #translationSelection TD {
    color: gray;
    padding: 0 2em 0 0;
  }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $('#ngvState').change(function() {
      if(this.checked) {
        $('.ngv').show();        
      } else {
        $('.ngv').hide();        
      }
    });
    $('#ngvCommentsState').change(function() {
      if(this.checked) {
        $('span.comment').show();        
      } else {
        $('span.comment').hide();        
      }
    });
    $('#ngvPunctuationState').change(function() {
      if(this.checked) {
        $('span.punctuation').show();        
      } else {
        $('span.punctuation').hide();        
      }
    });
    $('#sblgntState').change(function() {
      if(this.checked) {
        $('.sblgnt').show();        
      } else {
        $('.sblgnt').hide();        
      }
    });
    $('#sblgnttState').change(function() {
      if(this.checked) {
        $('.sblgntt').show();        
      } else {
        $('.sblgntt').hide();        
      }
    });
    $('#ngvwState').change(function() {
      if(this.checked) {
        $('.ngvw').show();        
      } else {
        $('.ngvw').hide();        
      }
    });
});
</script>
</head>
<body>
<h1>gitBible</h1>
<table id='translationSelection'>
<tr><td><input checked id='ngvState' type='checkbox'>NGV</input></td><td><input id='ngvCommentsState' type='checkbox'>Com.</input></td><td><input checked id='ngvPunctuationState' type='checkbox'>Punct.</input></td></tr>
<tr><td><input id='sblgntState' type='checkbox'>SBLGNT</input></td><td colspan='2'>&nbsp;</td></tr>
<tr><td><input id='sblgnttState' type='checkbox'>SBLGNT(t)</input></td><td colspan='2'>&nbsp;</td></tr>
<tr><td><input id='ngvwState' type='checkbox'>NGVw</input></td><td colspan='2'>&nbsp;</td></tr>
</table>
<h2>Romans 1</h2>
<h3>1</h3>
<p class='ngv'>Paul a slave of Christ <span class='comment'>(Messiah)</span> Jesus<span class='punctuation'>,</span> called to be an apostle<span class='punctuation'>,</span> having been separated into the gospel of God</p>
<p class='sblgnt'>Παῦλος δοῦλος Χριστοῦ Ἰησοῦ, κλητὸς ἀπόστολος, ἀφωρισμένος εἰς εὐαγγέλιον θεοῦ</p>
<p class='sblgntt'>Paulos doulos Christou Iēsou klētos apostolos aphōrismenos eis euangelion theou<p>
<p class='ngvw'>Paul / a slave / of Christ <span class='comment'>(Messiah)</span> / Jesus / called to be an / apostle / having been separated / into / the gospel / of God</p>
<h3>2</h3>
<p class='ngv'>which he promised beforehand through the prophets of him in the holy scriptures</p>
<p class='sblgnt'>ὃ προεπηγγείλατο διὰ τῶν προφητῶν αὐτοῦ ἐν γραφαῖς ἁγίαις</p>
<p class='sblgntt'>ho proepēngeilato dia tōn prophētōn autou en graphais hagiais<p>
<p class='ngvw'>which / he promised beforehand / through / the / prophets / of him / in / the holy / scriptures</p>
<h3>3</h3>
<p class='ngv'>concerning the Son of him<span class='punctuation'>,</span> the having come into being out from the seed [singular] of David according to the flesh<span class='punctuation'>,</span></p>
<p class='sblgnt'>περὶ τοῦ υἱοῦ αὐτοῦ, τοῦ γενομένου ἐκ σπέρματος Δαυὶδ κατὰ σάρκα,</p>
<p class='sblgntt'>peri tou huiou autou tou genomenou ek spermatos Dauid kata sarka<p>
<p class='ngvw'>concerning / the / Son / of him / the / having come into being / out from / seed [singular] / of David / according to / flesh</p>
<h3>4</h3>
<p class='ngv'>the determined <span class='comment'>(appointed)</span> Son of God in power according to the Spirit <span class='comment'>(wind<span class='punctuation'>,</span> breath)</span> of holiness out from resurrection the deads<span class='punctuation'>,</span> Jesus Christ the Lord of us<span class='punctuation'>,</span></p>
<p class='sblgnt'>τοῦ ὁρισθέντος υἱοῦ θεοῦ ἐν δυνάμει κατὰ πνεῦμα ἁγιωσύνης ἐξ ἀναστάσεως νεκρῶν, Ἰησοῦ Χριστοῦ τοῦ κυρίου ἡμῶν,</p>
<p class='sblgntt'>tou horisthentos huiou theou en dynamei kata pneuma hagiōsynēs ex anastaseōs nekrōn Iēsou Christou tou kyriou hēmōn<p>
<p class='ngvw'>the / determined <span class='comment'>(appointed)</span> / Son / of God / in / power / according to / Spirit <span class='comment'>(wind, breath)</span> / holiness / out from / resurrection / the deads / Jesus / Christ / the / Lord / of us</p>
<h3>5</h3>
<p class='ngv'>by whom I have received grace and apostleship into <span class='comment'>(for)</span> obedience of faith in all the Gentiles for <span class='comment'>(the sake of)</span> the name of him<span class='punctuation'>,</span></p>
<p class='sblgnt'>διʼ οὗ ἐλάβομεν χάριν καὶ ἀποστολὴν εἰς ὑπακοὴν πίστεως ἐν πᾶσιν τοῖς ἔθνεσιν ὑπὲρ τοῦ ὀνόματος αὐτοῦ,</p>
<p class='sblgntt'>diʼ hou elabomen charin kai apostolēn eis hypakoēn pisteōs en pasin tois ethnesin hyper tou onomatos autou<p>
<p class='ngvw'>by <span class='comment'>(through)</span> / whom / I have received / grace / and / apostleship / into <span class='comment'>(for)</span> / obedience / of faith / in <span class='comment'>(and among)</span> / all <span class='comment'>(generic)</span> / the / Gentiles / for <span class='comment'>(the sake of)</span> / the / name / of him</p>
<h3>6</h3>
<p class='ngv'>in which are also you called to Jesus Christ<span class='punctuation'>,</span></p>
<p class='sblgnt'>ἐν οἷς ἐστε καὶ ὑμεῖς κλητοὶ Ἰησοῦ Χριστοῦ,</p>
<p class='sblgntt'>en hois este kai hymeis klētoi Iēsou Christou<p>
<p class='ngvw'>in / which / are / also / you / called / to Jesus / Christ</p>
<h3>7</h3>
<p class='ngv'>all the are in Rome beloved of God<span class='punctuation'>,</span> called to holiness <span class='punctuation'>–</span> grace to you and peace from God our Father and the Lord Jesus Christ<span class='punctuation'>.</span></p>
<p class='sblgnt'>πᾶσιν τοῖς οὖσιν ἐν Ῥώμῃ ἀγαπητοῖς θεοῦ, κλητοῖς ἁγίοις· χάρις ὑμῖν καὶ εἰρήνη ἀπὸ θεοῦ πατρὸς ἡμῶν καὶ κυρίου Ἰησοῦ Χριστοῦ.</p>
<p class='sblgntt'>pasin tois ousin en Rhōmē agapētois theou klētois hagiois charis hymin kai eirēnē apo theou patros hēmōn kai kyriou Iēsou Christou<p>
<p class='ngvw'>all <span class='comment'>(generic)</span> / the / are / in / Rome / beloved / of God / called / to holiness / grace / to you / and / peace / from / God / Father / our / and / Lord / Jesus / Christ</p>
<h3>8</h3>
<p class='ngv'>Firstly to be sure I thank <span class='comment'>(eucharist)</span> the God of me through Jesus Christ for all of you<span class='punctuation'>,</span> that the faith of you is proclaimed in all the world<span class='punctuation'>.</span></p>
<p class='sblgnt'>Πρῶτον μὲν εὐχαριστῶ τῷ θεῷ μου διὰ Ἰησοῦ Χριστοῦ περὶ πάντων ὑμῶν, ὅτι ἡ πίστις ὑμῶν καταγγέλλεται ἐν ὅλῳ τῷ κόσμῳ.</p>
<p class='sblgntt'>Prōton men eucharistō tō theō mou dia Iēsou Christou peri pantōn hymōn hoti hē pistis hymōn katangelletai en holō tō kosmō<p>
<p class='ngvw'>firstly / to be sure / I thank / the / God / of me / through / Jesus / Christ / for / all (generic) / of you / that / the / faith / of you / is (repeatedly) proclaimed / in / all / the / world</p>
<h3>9</h3>
<p class='ngv'>Witness <span class='comment'>(martyr)</span> indeed of me is the God<span class='punctuation'>,</span> whom I worship in the spirit of me in the gospel of the Son of him<span class='punctuation'>,</span> how without ceasing remembrance <span class='comment'>(mention)</span> of you I make</p>
<p class='sblgnt'>μάρτυς γάρ μού ἐστιν ὁ θεός, ᾧ λατρεύω ἐν τῷ πνεύματί μου ἐν τῷ εὐαγγελίῳ τοῦ υἱοῦ αὐτοῦ, ὡς ἀδιαλείπτως μνείαν ὑμῶν ποιοῦμαι</p>
<p class='sblgntt'>martys gar mou estin ho theos hō latreuō en tō pneumati mou en tō euangeliō tou huiou autou hōs adialeiptōs mneian hymōn poioumai<p>
<p class='ngvw'>witness <span class='comment'>(martyr)</span> / indeed / of me / is / the / God / whom / I worship <span class='comment'>(serve)</span> / in / the / spirit / of me / in / the / gospel / of the / Son / of him / how / without ceasing / remembrance <span class='comment'>(mention)</span> / of you / I make</p>
<h3>10</h3>
<p class='ngv'>always upon the prayers of me<span class='punctuation'>,</span> wanting if how now at some time good journey in the will the of God to come to you<span class='punctuation'>.</span></p>
<p class='sblgnt'>πάντοτε ἐπὶ τῶν προσευχῶν μου, δεόμενος εἴ πως ἤδη ποτὲ εὐοδωθήσομαι ἐν τῷ θελήματι τοῦ θεοῦ ἐλθεῖν πρὸς ὑμᾶς.</p>
<p class='sblgntt'>pantote epi tōn proseuchōn mou deomenos ei pōs ēdē pote euodōthēsomai en tō thelēmati tou theou elthein pros hymas<p>
<p class='ngvw'>always / upon / the / prayers / of me / wanting / if / how / now / at some time / good journey / in / the / will / the / of God / to come / to / you</p>
<h3>11</h3>
<p class='ngv'>I yearn indeed to see you<span class='punctuation'>,</span> that someone (something) I may share gift <span class='comment'>(freely<span class='punctuation'>,</span> graciously)</span> to you spiritual into the strengthening of you<span class='punctuation'>,</span></p>
<p class='sblgnt'>ἐπιποθῶ γὰρ ἰδεῖν ὑμᾶς, ἵνα τι μεταδῶ χάρισμα ὑμῖν πνευματικὸν εἰς τὸ στηριχθῆναι ὑμᾶς,</p>
<p class='sblgntt'>epipothō gar idein hymas hina ti metadō charisma hymin pneumatikon eis to stērichthēnai hymas<p>
<p class='ngvw'>I yearn / indeed / to see / you / that / someone (something) / I may share / gift <span class='comment'>(freely, graciously)</span> / to you / spiritual / into / the / strengthening / of you</p>
<h3>12</h3>
<p class='ngv'>this moreover (and) is mutual encouragement <span class='comment'>(strength)</span> in you by the in one another faith of you both and of me<span class='punctuation'>.</span></p>
<p class='sblgnt'>τοῦτο δέ ἐστιν συμπαρακληθῆναι ἐν ὑμῖν διὰ τῆς ἐν ἀλλήλοις πίστεως ὑμῶν τε καὶ ἐμοῦ.</p>
<p class='sblgntt'>touto de estin symparaklēthēnai en hymin dia tēs en allēlois pisteōs hymōn te kai emou<p>
<p class='ngvw'>this / moreover (and) / is / mutual encouragement <span class='comment'>(strength)</span> / in / you / by / the / in / one another / faith / of you / both / and / of me</p>
<h3>13</h3>
<p class='ngv'>I do not wish moreover (and) you to be unaware<span class='punctuation'>,</span> brothers<span class='comment'> (and sisters)</span><span class='punctuation'>,</span> that often I purposed to come to you<span class='punctuation'>,</span> and was prevented until the now<span class='punctuation'>,</span> that some(one) fruit I may have and in you as and in the rest Gentiles<span class='punctuation'>.</span></p>
<p class='sblgnt'>οὐ θέλω δὲ ὑμᾶς ἀγνοεῖν, ἀδελφοί, ὅτι πολλάκις προεθέμην ἐλθεῖν πρὸς ὑμᾶς, καὶ ἐκωλύθην ἄχρι τοῦ δεῦρο, ἵνα τινὰ καρπὸν σχῶ καὶ ἐν ὑμῖν καθὼς καὶ ἐν τοῖς λοιποῖς ἔθνεσιν.</p>
<p class='sblgntt'>ou thelō de hymas agnoein adelphoi hoti pollakis proethemēn elthein pros hymas kai ekōlythēn achri tou deuro hina tina karpon schō kai en hymin kathōs kai en tois loipois ethnesin<p>
<p class='ngvw'>not / I do wish / moreover (and) / you / to be unaware <span class='comment'>(ignorant)</span> / brothers <span class='comment'>(and sisters)</span> / that / often / I purposed / to come / to / you / and / was prevented / until / the / now / that / some(one) / fruit / I may have / and / in / you / as / and / in / the / rest / Gentiles</p>
<h3>14</h3>
<p class='ngv'>Greeks both and Barbarians<span class='punctuation'>,</span> wise both and foolish indebted I am <span class='punctuation'>–</span></p>
<p class='sblgnt'>Ἕλλησίν τε καὶ βαρβάροις, σοφοῖς τε καὶ ἀνοήτοις ὀφειλέτης εἰμί·</p>
<p class='sblgntt'>Hellēsin te kai barbarois sophois te kai anoētois opheiletēs eimi<p>
<p class='ngvw'>Greeks / both / and / Barbarians / wise / both / and / foolish / indebted / I am</p>
<h3>15</h3>
<p class='ngv'>in this manner the according to me forward in spirit also to you the in Rome to preach the gospel<span class='punctuation'>.</span></p>
<p class='sblgnt'>οὕτως τὸ κατʼ ἐμὲ πρόθυμον καὶ ὑμῖν τοῖς ἐν Ῥώμῃ εὐαγγελίσασθαι.</p>
<p class='sblgntt'>houtōs to katʼ eme prothymon kai hymin tois en Rhōmē euangelisasthai<p>
<p class='ngvw'>in this manner / the / according to / me / forward in spirit / also / to you / the / in / Rome / to preach the gospel</p>
<h3>16</h3>
<p class='ngv'>Not indeed I am ashamed of the gospel<span class='punctuation'>,</span> power indeed of God is into salvation<span class='punctuation'>,</span> everyone the faithful<span class='punctuation'>,</span> Jewish both first and Greek <span class='punctuation'>–</span></p>
<p class='sblgnt'>Οὐ γὰρ ἐπαισχύνομαι τὸ εὐαγγέλιον, δύναμις γὰρ θεοῦ ἐστιν εἰς σωτηρίαν παντὶ τῷ πιστεύοντι, Ἰουδαίῳ τε πρῶτον καὶ Ἕλληνι·</p>
<p class='sblgntt'>Ou gar epaischynomai to euangelion dynamis gar theou estin eis sōtērian panti tō pisteuonti Ioudaiō te prōton kai  Hellēni<p>
<p class='ngvw'>not / indeed / I am ashamed / of / the gospel / power / indeed / of God / is / into <span class='comment'>(for)</span> / salvation / everyone / the / faithful / Jewish / both / first / and / Greek</p>
<h3>17</h3>
<p class='ngv'>righteousness <span class='comment'>(justice)</span> indeed of God in him revealed out from faithfulness into faith<span class='punctuation'>,</span> as it is written <span class='punctuation'>–</span> <span class='punctuation'>‘</span>the moreover (and) righteous out from faithfulness will live<span class='punctuation'>’</span><span class='punctuation'>.</span></p>
<p class='sblgnt'>δικαιοσύνη γὰρ θεοῦ ἐν αὐτῷ ἀποκαλύπτεται ἐκ πίστεως εἰς πίστιν, καθὼς γέγραπται· Ὁ δὲ δίκαιος ἐκ πίστεως ζήσεται.</p>
<p class='sblgntt'>dikaiosynē gar theou en autō apokalyptetai ek pisteōs eis pistin kathōs gegraptai HO de dikaios ek pisteōs zēsetai<p>
<p class='ngvw'>righteousness <span class='comment'>(justice)</span> / indeed / of God / in / him / revealed <span class='comment'>(apocalypsed)</span> / out from / faithfulness / into <span class='comment'>(for)</span> / faith / as / it is written / the / moreover (and) / righteous / out from / faithfulness / will live</p>
<h3>18</h3>
<p class='ngv'>Revealed indeed the wrath of God from heaven upon all ungodliness <span class='comment'>(impiety)</span> and unrighteousness <span class='comment'>(injustice)</span> of men the the truth in unrighteousness holding back<span class='punctuation'>,</span></p>
<p class='sblgnt'>Ἀποκαλύπτεται γὰρ ὀργὴ θεοῦ ἀπʼ οὐρανοῦ ἐπὶ πᾶσαν ἀσέβειαν καὶ ἀδικίαν ἀνθρώπων τῶν τὴν ἀλήθειαν ἐν ἀδικίᾳ κατεχόντων,</p>
<p class='sblgntt'>apokalyptetai gar orgē theou apʼ ouranou epi pasan asebeian kai adikian anthrōpōn tōn tēn alētheian en adikia katechontōn<p>
<p class='ngvw'>revealed <span class='comment'>(apocalypsed)</span> / indeed / the wrath / of God / from / heaven / upon / all / ungodliness <span class='comment'>(impiety)</span> / and / unrighteousness <span class='comment'>(injustice)</span> / of men / the / the / truth / in / unrighteousness <span class='comment'>(injustice)</span> / holding back</p>
<h3>19</h3>
<p class='ngv'>because the known the of God made known <span class='comment'>(appearing)</span> <span class='comment'>(manifest)</span> is in them<span class='punctuation'>,</span> the God indeed to them has appeared<span class='comment'> (revealed)</span><span class='comment'> (showed)</span><span class='comment'> (manifested forth)</span><span class='punctuation'>.</span></p>
<p class='sblgnt'>διότι τὸ γνωστὸν τοῦ θεοῦ φανερόν ἐστιν ἐν αὐτοῖς, ὁ θεὸς γὰρ αὐτοῖς ἐφανέρωσεν.</p>
<p class='sblgntt'>dioti to gnōston tou theou phaneron estin en autois ho theos gar autois ephanerōsen<p>
<p class='ngvw'>because / the / known / the / of God / made known <span class='comment'>(appearing)</span> <span class='comment'>(manifest)</span> / is / in / them / the / God / indeed / to them / has appeared <span class='comment'>(revealed)</span> <span class='comment'>(showed)</span> <span class='comment'>(manifested forth)</span></p>
<h3>20</h3>
<p class='ngv'>The indeed not seen of Him from creation world the made is understood clearly seen<span class='punctuation'>,</span> the both everlasting <span class='comment'>(eternal)</span> of him power and deity manifested into the to be them without <span class='comment'>(argument of)</span> defence<span class='punctuation'>,</span></p>
<p class='sblgnt'>τὰ γὰρ ἀόρατα αὐτοῦ ἀπὸ κτίσεως κόσμου τοῖς ποιήμασιν νοούμενα καθορᾶται, ἥ τε ἀΐδιος αὐτοῦ δύναμις καὶ θειότης, εἰς τὸ εἶναι αὐτοὺς ἀναπολογήτους,</p>
<p class='sblgntt'>ta gar aorata autou apo ktiseōs kosmou tois poiēmasin nooumena kathoratai hē te aidios autou dynamis kai theiotēs eis to einai autous anapologētous<p>
<p class='ngvw'>the / indeed / not seen <span class='comment'>(invisible)</span> / of Him / from / creation / world / the / made / is understood / clearly seen <span class='comment'>(look down from above)</span> / the / both / everlasting <span class='comment'>(eternal)</span> / of him / power / and / deity manifested / into / the / to be / them / without <span class='comment'>(argument of)</span> defence</p>
<h3>21</h3>
<p class='ngv'>because having known the God not as God glorified or made thankful<span class='punctuation'>,</span> but they became futile in the reasoning of them and was darkened which without understanding of them heart –</p>
<p class='sblgnt'>διότι γνόντες τὸν θεὸν οὐχ ὡς θεὸν ἐδόξασαν ἢ ηὐχαρίστησαν, ἀλλὰ ἐματαιώθησαν ἐν τοῖς διαλογισμοῖς αὐτῶν καὶ ἐσκοτίσθη ἡ ἀσύνετος αὐτῶν καρδία·</p>
<p class='sblgntt'>dioti gnontes ton theon ouch hōs theon edoxasan ē ēucharistēsan alla emataiōthēsan en tois dialogismois autōn kai eskotisthē hē asynetos autōn kardia<p>
<p class='ngvw'>because / having known / the / God / not / as / God / glorified / or / made thankful / but / they became futile / in / the / reasoning / of them / and / was darkened / which / without understanding / of them / heart</p>
<h3>22</h3>
<p class='ngv'>professing themselves to be wise they became fools<span class='punctuation'>,</span></p>
<p class='sblgnt'>φάσκοντες εἶναι σοφοὶ ἐμωράνθησαν,</p>
<p class='sblgntt'>phaskontes einai sophoi emōranthēsan<p>
<p class='ngvw'>professing themselves / to be / wise / they became fools</p>
<h3>23</h3>
<p class='ngv'>and they exchanged the glory of the imperishable God with a copied image <span class='comment'>(statue)</span> of perishable man and birds and four-footed animals and crawling animals<span class='punctuation'>.</span></p>
<p class='sblgnt'>καὶ ἤλλαξαν τὴν δόξαν τοῦ ἀφθάρτου θεοῦ ἐν ὁμοιώματι εἰκόνος φθαρτοῦ ἀνθρώπου καὶ πετεινῶν καὶ τετραπόδων καὶ ἑρπετῶν.</p>
<p class='sblgntt'>kai ēllaxan tēn doxan tou aphthartou theou en homoiōmati eikonos phthartou anthrōpou kai peteinōn kai tetrapodōn kai herpetōn<p>
<p class='ngvw'>and / they exchanged / the / glory / of the / imperishable <span class='comment'>(undecaying)</span> <span class='comment'>(uncorruptible)</span> / God / with / a copy <span class='comment'>(likeness)</span> / image <span class='comment'>(statue)</span> <span class='comment'>(representation)</span> / perishable <span class='comment'>(corruptible)</span> / man / and / birds / and four-footed animals / and crawling animals</p>

&nbsp;

<hr>

<p><small><a href="">gitBible.com</a> and the NGV (New Git Version) is Copyright &copy; 2020 <a href="https://davidstansfield.id.au">David R. Stansfield</a>.<br>
The <a href="https://github.com/davidrstansfield/gitbible">gitBible repository</a> is released under the <a href="https://www.gnu.org/licenses/gpl-3.0.en.html">GNU General Public License 3.0</a>.<br>
</small></p>
<p><small>Scripture quotations marked SBLGNT are from the SBL Greek New Testament. Copyright &copy; 2010 <a href="http://www.sbl-site.org/">Society of Biblical Literature</a> and <a href="http://www.logos.com/">Logos Bible Software</a>.</small></p>
</body>
</html>
