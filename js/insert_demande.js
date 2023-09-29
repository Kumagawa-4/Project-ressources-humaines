const form = document.getElementById('insert_demande');

form.addEventListener('submit', async (event) => {
  event.preventDefault();

  const titre = document.getElementById('titre').value;
  const volumeActuel = document.getElementById('volumeActuel').value;
  const volumeRecherche = document.getElementById('volumeRecherche').value;

  const critereDiplome = document.querySelectorAll('#myForm input[name="critere"][value="Diplôme"]:checked');
  const critereStatut = document.querySelectorAll('#myForm input[name="critere"][value="Statut"]:checked');
  const critereAdresse = document.querySelectorAll('#myForm input[name="critere"][value="Adresse"]:checked');

  const critereDiplomeValues = Array.from(critereDiplome).map(input => input.value);
  const critereStatutValues = Array.from(critereStatut).map(input => input.value);
  const critereAdresseValues = Array.from(critereAdresse).map(input => input.value);

  // Envoi des valeurs au serveur
  const response = await fetch('/demande', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({
      titre: titre,
      volume_de_travail_A: volumeActuel,
      volume_de_travail_R: volumeRecherche,
      critere_diplome: critereDiplomeValues,
      statut: critereStatutValues,
      adress: critereAdresseValues
    })
  });

  if (response.ok) {
    console.log('Données envoyées avec succès !');
    // Redirection vers Annonce.html
    window.location.href = 'Annonce.html';
  } else {
    console.log('Erreur lors de l\'envoi des données.');
  }
});
