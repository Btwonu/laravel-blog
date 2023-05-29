# Projcts'

---

## Apache setup

Provide an `.env` file and configure the following:
1. `APP_URL`
2. `DB_DATABASE`
3. `DB_PASSWORD`

Run:

```bash
php artisan key:generate
php artisan storage:link
php artisan migrate:fresh --seed
```