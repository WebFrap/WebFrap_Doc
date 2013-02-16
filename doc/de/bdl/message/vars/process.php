
<h1>Process Variablen</h1>

<p>Diese Variablen existieren nur wenn die Message eine Process Message ist,
also einer von einem Porcess implizit erzeugten Master Message ableitet.</p>

<label>Liste der Process Variablen</label>
<ul>
  <li><span class="value" >{@process:user_comment@}</span> 
    Kommentar des Users welcher den Zustandsübergan getriggert hat. 
    (Nur vorhanden wenn dieser Zustandsübergang auch ein Commentfeld besitzt)
  </li>
  <li><span class="value" >{@process:activ_status@}</span> 
    Der aktuelle Status des Prozesses.
  </li>
  <li><span class="value" >{@process:rating@}</span> 
    Rating des Users welcher den Zustandsübergan getriggert hat. 
    (Nur vorhanden wenn dieser Zustandsübergang auch ein Ratinfeld besitzt)
  </li>
</ul>