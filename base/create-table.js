const pg = require('pg');

// Configuration de la connexion à PostgreSQL
const config = {
  user: 'postgres',
  database: 'Ressource_humain',
  password: 'root',
  host: 'localhost',
  port: 5432
};

// Création de la table
const createTable = async () => {
  // Requête SQL pour créer la table
  const createTableQuery = `
    CREATE TABLE IF NOT EXISTS demande (
      idDemande SERIAL PRIMARY KEY,
      titre VARCHAR(100),
      volume_de_travail_A DECIMAL(10, 2),
      volume_de_travail_R DECIMAL(10, 2),
      critere_diplome INTEGER,
      statut INTEGER,
      adress INTEGER
    );
  `;

  // Connexion au serveur PostgreSQL
  const client = new pg.Client(config);
  await client.connect();

  try {
    // Exécution de la requête pour créer la table
    await client.query(createTableQuery);
    console.log('La table "users" a été créée avec succès.');
  } catch (error) {
    console.error('Erreur lors de la création de la table :', error);
  } finally {
    await client.end();
  }
};

// Appel de la fonction pour créer la table
createTable();
