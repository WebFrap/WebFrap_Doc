<?xml version="1.0" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Start</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="content-Script-Type" content="application/javascript" />
<meta http-equiv="content-Style-Type" content="text/css" />
<meta http-equiv="content-language" content="de" />

<link href="../doc.css" rel="stylesheet" type="text/css" />

</head>

<body>
  <div class="content"  >

<h1>Sicherheit</h1>

<h2>Wie wichtig ist Sicherheit für WebFrap?</h2>

<p>Eine 100%tige Sicherheit ist praktisch nicht möglich.
Sicherheitsrelevante Fehler in komplexen Applikationen gab es schon immer
und wird es vermutich auch immer geben.
Jeder der behauptet seine Applikation wäre zu 100% Sicher hat keine Ahnung, oder lügt dir ins Gesicht.<br />
<span class="footnode" >Eine praktisch nicht relevante Ausname sind sehr kleine Applikationen mit wenigen Zeilen Code.</span>
</p>

<p>
Die Kunst einer Sicheren Softwareentwicklung ist es eine Applikation so sicher zu machen, dass der Aufwand eine
Lücke zu finden, den Nutzen den der Angreife daraus ziehen könnte deutlich überwiegt.
</p>

<p>
Es gibt verschiedene Arten von Sicherheitslücken:

<ul class="docTree" >
  <li>Technische Lücken</li>
  <li>Konzeptionelle Lücken</li>
  <li>Mangelhafte Fehlerbehandlung</li>
  <li>Lücken durch mangelhafte Konfiguration</li>
</ul>

Es gibt Lücken die nicht vom Programm abgefangen werden können.


</p>

<p>
Das ist bei weitem nicht so kompliziert wie sich das vielleicht anhören mag, speziell für WebApplikationen gibt es eine
Reihe von potentiellen Lücken die durch eine saubere Validierung und einige Tests einfach erkannt und vermieden werden können.
</p>

<p>
Die bekanntesten und Wichtigsten hierbei sind:
</p>

<ul class="docTree">
  <li>SQL-Injection</li>
  <li>Cross-Site-Scripting</li>
  <li>Session-Fixation</li>
  <li>Session-Hijacking</li>
  <li>Mail-Header-Injection</li>
  <li>Cross-Site-Request-Forgery</li>
  <li>HTTP-Header-Manipulation</li>
  <li>Response-Splitting</li>
</ul>

<p>
Bei Einhaltung der von WebFrap vorgegebenen Richtlinien für eine Sichere Programmierung können die genannten
Lücken nach heutigem Wissen vermieden werden.
</p>


<p>

</p>








  </div>


</body>
</html>
