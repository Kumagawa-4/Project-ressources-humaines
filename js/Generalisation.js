class Generalisation{

    GenerateSelectedQuery(table, columns, conditions){

        let query = "SELECT ";

        if (columns && columns.length > 0) {
          query += columns.join(", ");
        } else {
          query += "*";
        }
      
        query += ` FROM ${table}`;
      
        if (conditions && conditions.length > 0) {
          query += ` WHERE ${conditions.join(" AND ")}`;
        }
      
        return query;
      
      
    }

    generateTruncateQuery(table) {
        return `TRUNCATE TABLE ${table}`;
    }

    generateInsertQuery(table, values) {
        const columns = Object.keys(values);
        const insertedValues = Object.values(values);
      
        const columnString = columns.join(", ");
        const valuePlaceholders = insertedValues.map(() => "?").join(", ");
      
        return `INSERT INTO ${table} (${columnString}) VALUES (${valuePlaceholders})`;
      }
}