const pg = require('pg');

// Configuration de la connexion à PostgreSQL
const config = {
  user: 'postgres',
  database: 'RB',
  password: 'root',
  host: 'localhost',
  port: 5432
};

// Création de la base de données
const createDatabase = async () => {
  const dbName = 'Ressource_humain'; // Nom de la base de données à créer

  // Connexion au serveur PostgreSQL
  const client = new pg.Client(config);
  await client.connect();

  try {
    // Création de la base de données
    await client.query(`CREATE DATABASE ${dbName}`);
    console.log(`La base de données "${dbName}" a été créée avec succès.`);
  } catch (error) {
    console.error('Erreur lors de la création de la base de données :', error);
  } finally {
    await client.end();
  }
};

// Appel de la fonction pour créer la base de données
createDatabase();
