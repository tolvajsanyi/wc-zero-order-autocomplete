# WooCommerce Zero Ft automatikus teljesítés

Ez a WordPress‑bővítmény lehetővé teszi, hogy egyes termékek esetén a 0 Ft értékű rendelések automatikusan **teljesített** státuszt kapjanak. A funkció hasznos például ingyenes minták vagy promóciós termékek esetén, ahol nem szükséges manuálisan kezelni a rendeléseket.

## Főbb funkciók

- Új jelölőnégyzet a termék szerkesztő felületén: “0 Ft automatikus teljesítés”.
- A rendelés leadása után a bővítmény ellenőrzi, hogy a rendelés teljes összege 0 Ft‑e és tartalmaz‑e olyan terméket, amelynél be van jelölve a fenti opció.
- A feltételek teljesülése esetén a rendelés státusza automatikusan “teljesített”-re változik.

## Telepítés

1. Hozz létre egy új könyvtárat a bővítmény számára (pl. `wc-zero-order-autocomplete`) a WordPress `wp-content/plugins/` mappájában.
2. Másold vagy klónozd a `wc-zero-order-autocomplete.php` fájlt ebbe a könyvtárba.
3. Jelentkezz be a WordPress admin felületére, majd a **Bővítmények** menüben aktiváld a “WooCommerce Zero Ft automatikus teljesítés” bővítményt.

## Használat

1. Lépj a WooCommerce termék szerkesztő oldalára.
2. A **Termékadatok** › **Általános** fülön megjelenik egy új jelölőnégyzet: **0 Ft automatikus teljesítés**.
3. Pipáld be, ha azt szeretnéd, hogy ennél a terméknél a 0 Ft értékű rendelések automatikusan teljesített státuszt kapjanak.
4. Amikor egy vásárló olyan rendelést ad le, amelynek teljes összege 0 Ft, és tartalmazza ezt a terméket, a rendelés automatikusan teljesített státuszra vált.

## Fejlesztés

- A bővítmény egyetlen PHP fájlból áll (`wc-zero-order-autocomplete.php`), így könnyen testreszabható.
- A bővítmény minimális WooCommerce API-hívásokat használ, nem igényel további beállítást.
- Javasolt a kód PHP‑szabványok szerinti formázása és a funkciók bővítése (pl. admin oldali visszajelzések) igény esetén.

## Licenc

Ez a projekt az [MIT licenc](LICENSE) feltételei szerint terjeszthető.

---

**Szerzők:** Tolvaj Sándor & ChatGPT  
