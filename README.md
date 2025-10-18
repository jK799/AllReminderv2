# AllReminder

AllReminder to webowa aplikacja do zarządzania urządzeniami, pojazdami, dokumentami oraz serwisami, z możliwością planowania i przypominania o ważnych terminach. Projekt został stworzony w ramach przedmiotu WdPAI.

## Spis treści

* [Funkcjonalności](#funkcjonalno%C5%9Bci)
* [Technologie](#technologie)
* [Wymagania](#wymagania)
* [Instalacja](#instalacja)
* [Struktura projektu](#struktura-projektu)
* [Bezpieczeństwo](#bezpiecze%C5%84stwo)
* [Autor](#autor)

---

## Funkcjonalności

* Rejestracja i logowanie użytkownika
* Różnorodne role (admin, user)
* Dodawanie, edycja i usuwanie:

  * Urządzeń
  * Pojazdów
  * Serwisów (z przypomnieniami)
  * Dokumentów (z możliwością przypisania do zasobów)
* Kalendarz (FullCalendar) do wizualizacji nadchodzących wydarzeń
* Personalizacja konta i ustawienia
* Upload plików (np. dokumenty, paragony)
* Responsywny interfejs
* Dashboard z przeglądem statystyk, przypomnień i aktywności

---


##  Technologie

### 🔹 Backend
* **Laravel 11 (PHP Framework)** – architektura MVC
* **MySQL / MariaDB** – baza danych z relacjami i transakcjami
* **Laravel Breeze / Sanctum** – rejestracja, logowanie i autoryzacja
* **REST API (Laravel Routes + Controllers)** – komunikacja z frontendem

### 🔹 Frontend
* **Vue.js 3 (Composition API)** – komponentowy interfejs użytkownika
* **FullCalendar.js** – wizualizacja terminarza wydarzeń
* **Bootstrap 5** – framework CSS do budowy layoutu i komponentów
* **FontAwesome** – zestaw ikon używany w interfejsie

### 🔹 Dodatkowe narzędzia
* **Axios** – komunikacja z API (AJAX)
* **Vite** – kompilacja i optymalizacja zasobów frontendowych
* **Composer** – zarządzanie zależnościami PHP
* **Node.js + npm** – zarządzanie pakietami frontendowymi

---

## Wymagania

* PHP ≥ 8.0
* MySQL / MariaDB
* XAMPP / MAMP / LAMP lub inny lokalny serwer
* Przeglądarka wspierająca JS (Chrome, Firefox)

---

## Instalacja

1. Sklonuj repozytorium lub wypakuj projekt do folderu `htdocs`:

```
AllReminder/
├── public/
├── PHP/
├── styles/
├── scripts/
├── uploads/
```

2. Utwórz bazę danych `AllReminder` i zaimportuj plik SQL:

```
AllReminder.sql
```

3. Skonfiguruj połączenie bazy danych w `PHP/config.php`

---

## Struktura projektu

* `public/` - pliki frontendowe (widoki, dashboard, kalendarz itd.)
* `PHP/` - backend: autoryzacja, obsługa danych, kontrolery
* `styles/` - arkusze CSS
* `scripts/` - JS (modale, dynamiczne akcje)
* `uploads/` - przesłane pliki PDF/jpg

---

## Bezpieczeństwo

* Hasła szyfrowane przez `password_hash`
* Sprawdzenie poprawności danych po stronie backendu
* Sesje użytkowników i ograniczenie dostępu do zasobów
* Brak replikacji kodu, czytelna architektura MVC

---

## Autor

* Jakub Hruby
* Politechnika Krakowska, kierunek: Informatyka
* Semestr: letni 2024/2025

---

Dziękuję za sprawdzenie projektu i zapraszam do testowania!
