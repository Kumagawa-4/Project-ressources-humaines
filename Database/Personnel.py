import psycopg2

# Création de la table "personnel"
def creer_table_personnel():
    # Connexion à la base de données
    conn = psycopg2.connect(
        host="localhost",
        database="inscription",
        user="postgres",
        password="root"
    )
    c = conn.cursor()

    # Création de la table "personnel"
    c.execute('''CREATE TABLE personnel
                 (date_naissance TEXT, nom TEXT, matricule TEXT, date_embauche TEXT, genre TEXT, direction TEXT, fonction TEXT)''')

    # Fermeture de la connexion
    conn.commit()
    conn.close()

# Insertion d'une nouvelle ligne dans la table "personnel"
def ajouter_personne(date_naissance, nom, matricule, date_embauche, genre, direction, fonction):
    # Connexion à la base de données
    conn = psycopg2.connect(
        host="localhost",
        database="inscription",
        user="postgres",
        password="root"
    )
    c = conn.cursor()

    # Insertion d'une nouvelle ligne
    c.execute("INSERT INTO personnel VALUES (%s, %s, %s, %s, %s, %s, %s)",
              (date_naissance, nom, matricule, date_embauche, genre, direction, fonction))

    # Validation de la transaction
    conn.commit()

    # Fermeture de la connexion
    conn.close()

# Exemple d'utilisation
creer_table_personnel()

ajouter_personne("01/01/1980", "John Doe", "123456", "01/01/2020", "Homme", "Info", "Développement de catégories sur Madagascar")
ajouter_personne("15/05/1990", "Jane Smith", "987654", "01/02/2021", "Femme", "Design", "Recherche de catégories sur Madagascar")