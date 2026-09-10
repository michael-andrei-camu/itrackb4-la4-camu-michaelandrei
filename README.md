# ITRACKB4 — Laboratory Activity 3

**Student Name:** MICHAEL ANDREI S CAMU 
**Course & Section:** BSIT - 4C  

### Part F Answers

#### Q1: Explain the order you placed your featured route and your detail route in, and what would happen if you swapped them.
I placed `/movies/featured` before `/movies/{id}` in `routes/web.php`. Because Laravel evaluates routes sequentially top-to-bottom, placing `/movies/featured` first ensures the string "featured" matches its specific route. If swapped, Laravel would match "featured" to the dynamic parameter `{id}` (setting `$id = "featured"`), calling `show()` instead of `featured()`, resulting in a 404 error when looking up "featured" in the array keys.

#### Q2: What happens when someone visits an id that does not exist in your data, and what did you write to make that happen?
When a visitor requests a non-existent ID (such as `/movies/999`), the application returns a clean HTTP 404 Not Found page without showing PHP system path errors. I implemented this using `if (!isset($movies[$id])) { abort(404); }` inside the controller's `show()` method.

#### Q3: Why do your links use route names instead of typed URLs? Give one concrete thing that would break if they did not.
Route names abstract the view links from the underlying URL paths. If hardcoded links like `<a href="/movies">` were used and the URL path was later changed in `web.php` to `/films`, every link in the view templates would break. Using `route('movies.index')` keeps the application functioning even if internal URL paths are modified.