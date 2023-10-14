UPDATE employes
SET congee_cumul = congee_cumul + 3, derniere_mise_a_jour = CURRENT_DATE
WHERE DATE_TRUNC('month', derniere_mise_a_jour) < DATE_TRUNC('month', CURRENT_DATE)
  AND DATE_TRUNC('month', date_embauche) <= DATE_TRUNC('month', CURRENT_DATE - INTERVAL '1 month');
