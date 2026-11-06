# ADEPA FOOD HUT

## AI Rules — Working Agreement for This Project

**File:** `AI-RULES.md`\
**Version:** 1.0 — Derived from the verified configuration of this installation\
**Status:** Binding for any AI agent working on this project\
**Reader:** any AI assistant, agent or automation touching this repository

------------------------------------------------------------------------

## 1. Purpose and authority

This file is the operating contract for AI work on ADEPA Food Hut. It
records how this installation is actually wired (verified, not assumed)
and the rules that keep changes predictable.

Precedence when documents disagree:

1. `AI-RULES.md` (this file) — process, safety, verified configuration.
2. `DESIGN.md` — visual design and interface conventions.
3. PRD / SRS — product scope and system behaviour.
4. Anything else.

If a rule here conflicts with reality, stop and report the discrepancy
instead of silently working around it.

### Non-negotiable rules

-   Work only inside `C:\Users\HP ELITEBOOK 830 G5\Downloads\PROJECTS\adepa-foods`.
-   Never edit, delete or "tidy" the backup theme `adepa-food-hut-backup`.
-   Never inline pattern content into the database template.
-   Never claim a verification you did not run.
-   Never invent content: no dishes, prices, hours, charges, phone
    numbers or testimonials.
-   Do not add dependencies, plugins or page builders without explicit
    approval.
-   Back up before any write to the database.

------------------------------------------------------------------------

## 2. Verified installation (as of 2026-11-06)

| Item | Value |
| --- | --- |
| Authoritative project | `C:\Users\HP ELITEBOOK 830 G5\Downloads\PROJECTS\adepa-foods` |
| Dev domain | `https://adepa-local.local` (also `http://`) |
| Local registry entry | `%APPDATA%\Local\sites.json` → id `4vWUYO72y` |
| Web root | `<project>\app\public` |
| Active theme | `adepa-food-hut` (`template` and `stylesheet`) |
| Database | MySQL **8.4.0**, schema `local`, prefix `wp_` |
| MySQL port | read from `%APPDATA%\Local\run\4vWUYO72y\conf\mysql\my.cnf` (currently `10011`) |
| MySQL datadir | `%APPDATA%\Local\run\4vWUYO72y\mysql\data` |
| MySQL client | `%APPDATA%\Local\lightning-services\mysql-8.4.0+2\bin\win64\bin\mysql.exe` |
| Credentials | `app\public\wp-config.php` (`DB_NAME`, `DB_USER`, `DB_PASSWORD`) |

The obsolete copy at `~/Local Sites/adepa-foods` was retired on
2026-11-06 and must not be recreated or referenced.

### Retired / backup material

`C:\Users\HP ELITEBOOK 830 G5\Downloads\PROJECTS\adepa-foods-legacy-backup-2026-11-06\`
holds the retired install archive, its database dump, and DB snapshots
from later repairs. Never delete this folder as part of routine work.

------------------------------------------------------------------------

## 3. Source of truth for content

**Registered PHP patterns are authoritative.** Nothing else.

-   Patterns live in `app/public/wp-content/themes/adepa-food-hut/patterns/`.
-   The homepage template in the database (`wp_posts` ID **14**,
    `post_name = front-page`, `post_type = wp_template`) must contain
    **only** `wp:pattern` references plus the header/footer template parts.
-   The invariant: that row holds **references only** — 6 `wp:pattern`
    entries plus the header/footer `wp:template-part` entries, ≈657 bytes.
    Anything larger means markup was copied into the database, which is a
    defect even if the page still looks correct.
-   Any save from the Site Editor writes the fully expanded document back
    into that row (a ~30 KB snapshot) and silently breaks the invariant,
    re-creating the duplication this project was cleaned of. After any
    editor save, re-check the row (length + `wp:pattern` count) and repair
    it to references before doing anything else.
-   Repair means restoring the reference-only document from
    `templates/front-page.html`, not hand-editing the snapshot: export the
    current row first, then write the reference document back with the
    row's identity (`ID`, `post_name`, `post_type`, `post_status`,
    `wp_theme` term) preserved.
-   Alarm condition: `LENGTH(post_content) > 2000` together with zero
    `wp:pattern` occurrences means the row is an inlined snapshot. Check
    this after every editor session, without being asked.
-   Editing a pattern file changes the homepage immediately. Editing the
    template record is only ever about *which* patterns it references.

### Pattern registration rules

-   A file in `patterns/` registers only when it carries a real header:
    `Title`, `Slug`, `Categories`, optional `Description`, `Keywords`,
    `Viewport Width`.
-   `patterns/hero.php` previously had **no header** and therefore never
    registered; `adepa/hero` was silently missing while
    `templates/front-page.html` referenced it. The header is now present —
    keep it.
-   Files with a header render through
    `ob_start(); include $file;` (`wp-includes/class-wp-block-patterns-registry.php`),
    so PHP inside a pattern file is legitimate and executes (hero image
    URLs rely on this).
-   After changing pattern headers or files, WordPress may serve a stale
    file-pattern cache. Clear it and re-trigger:
    `DELETE FROM wp_options WHERE option_name LIKE '%wp_theme_files_patterns%';`
    then request the front end once and confirm the slug appears.

------------------------------------------------------------------------

## 4. Gutenberg serialization rules

WordPress validates a block by re-running the block's `save()` and
comparing the output with the stored inner HTML. Any mismatch produces
*"Block contains unexpected or invalid content."*

Therefore:

-   **Never write self-closing block comments for blocks whose `save()`
    renders markup.** `core/image` always returns a `<figure>`, even with
    no image selected.
-   Correct empty image block (native, editor-selectable, placeholder
    shown):

    ```html
    <!-- wp:image {"sizeSlug":"thumbnail","linkDestination":"none","className":"adepa-index__image adepa-index__image--01"} -->
    <figure class="wp-block-image size-thumbnail adepa-index__image adepa-index__image--01"><img alt=""/></figure>
    <!-- /wp:image -->
    ```

-   Class order is part of the comparison: generated classes first
    (`wp-block-image`, `size-{slug}`), custom `className` last.
-   Verify serializations against real sources, not memory:
    -   `app/public/wp-includes/js/dist/block-library.js` — find
        `function save…({ attributes })`.
    -   WordPress's own themes (`twentytwentyfour`, `twentytwentyfive`)
        for editor-produced examples.
-   Never substitute HTML `<img>`, custom HTML blocks, CSS background
    images or hardcoded URLs where a native Image block is required.

------------------------------------------------------------------------

## 5. Frontend architecture map

| Feature | File |
| --- | --- |
| Homepage sections | `patterns/hero.php`, `featured.php`, `menu-discovery.php`, `brand-story.php`, `delivery.php`, `order-cta.php` |
| Page headers | `patterns/page-header.php` |
| Page templates | `templates/front-page.html`, `index.html`, `page.html` |
| Header / footer | `parts/header.html`, `parts/footer.html` |
| Styles | `assets/css/main.css` (all design), `assets/css/motion.css` (hero keyframes), `assets/css/editor.css` (editor canvas only) |
| Motion JS | `assets/js/main.js`, `assets/js/motion/motion-core.js`, `motion-init.js`, `hero-rotation.js`, `dish-carousel.js`, `scroll-reveal.js`, `announcement-ticker.js` |
| Bootstrap | `functions.php` → `inc/setup.php` (assets, colours), `inc/starter-content.php` (starter pages) |
| Tokens | `theme.json` (colours, font sizes, spacing, button/heading elements) |

### Announcement banner contract

Markup inside `patterns/hero.php`, inside the hero section:

-   1 × `.adepa-ticker` container (full width, ink background)
-   1 × `.adepa-ticker__row`
-   1 × `.adepa-ticker__track`
-   5 × `.adepa-ticker__set`, first carries `is-active`
-   Messages: `DELIVERY ONLY`, `WE DELIVER TO MILTON KEYNES`,
    `WE DELIVER ALSO NORTHAMPTON`, `ORDERS CONFIRMED BY OUR TEAM BEFORE PROCESSING`,
    `SUBJECT TO OPERATING HOURS 10AM TO MIDNIGHT`

Behaviour: `announcement-ticker.js` registers as `AnnouncementTicker` in
`Motion.modules`; `motion-init.js` calls each module's `init()` on
`DOMContentLoaded`; timings come from `Motion.config.tickerInterval`
(3500 ms) and `tickerFade` (500 ms). CSS hides inactive messages with
`display: none` and reveals `.is-active` — so if JavaScript fails, the
banner shows the first message only, never a run-together line.

Diagnosing "the banner stopped animating":

1. Does the served HTML contain `.adepa-ticker__track` and 5
   `.adepa-ticker__set`? If not, the homepage is not using the pattern.
2. Is `adepa/hero` in the registered pattern list?
3. Are all motion scripts 200 and is `adepa-motion-ready` added to
   `<html>`?

------------------------------------------------------------------------

## 6. CSS rules

-   One presentation stylesheet: `assets/css/main.css`. Do not scatter
    section styles elsewhere.
-   Follow the existing naming system: `.adepa-*` block, `.adepa-x__y`
    element, `.adepa-x--y` variant.
-   Use the tokens: `--adepa-ink`, `--adepa-cream`, `--adepa-pepper`,
    `--adepa-spice`, `--adepa-olive`, `--adepa-muted`, `--adepa-line`,
    `--adepa-surface`, `--adepa-font-display`, `--adepa-font-body`,
    `--adepa-*` type/spacing scales. Do not introduce new colours or type
    scales.
-   Reuse the breakpoints already in `main.css` (tablet, `max-width:
    767px`, and the small screen block). Do not invent intermediate
    breakpoints.
-   Section styles are scoped; do not add global element selectors that
    could leak into plugins or admin UI.
-   Image-block styling must not distort media: `object-fit: contain`
    with explicit width/height, no forced crops, no decorative borders.
-   Do not duplicate a selector that already exists — grep before adding.

------------------------------------------------------------------------

## 7. JavaScript rules

-   No frameworks, no build step, no external CDN.
-   New motion features are modules: define an object with `init()` and
    `destroy()`, then `Motion.register('Name', module)`. `motion-init.js`
    will call it. Never add a second initialisation path.
-   Read timings from `Motion.config`; do not hardcode new intervals.
-   Guard for reduced motion via `Motion.prefersReducedMotion()`.
-   Scripts are enqueued in `inc/setup.php` with `defer` in the footer and
    the theme version as the cache key.

------------------------------------------------------------------------

## 8. Asset caching

The enqueue version is `wp_get_theme()->get( 'Version' )` from
`style.css`. CSS/JS are served with `Cache-Control: no-cache`, but the
`?ver=` query still decides what browsers keep.

-   Any change to `main.css`, `motion.css`, `editor.css` or a `.js` file
    requires bumping `Version` in `style.css` (currently `1.0.1`).
-   Never reuse a version number you have already shipped.

------------------------------------------------------------------------

## 9. Database rules

Access pattern that works here (no `php`, `wp-cli` or `mysql` on PATH):

```bash
MYSQL="$APPDATA/Local/lightning-services/mysql-8.4.0+2/bin/win64/bin/mysql.exe"
DB_NAME=$(sed -n "s/^define( 'DB_NAME', *'\([^']*\)'.*/\1/p" app/public/wp-config.php)
DB_USER=$(sed -n "s/^define( 'DB_USER', *'\([^']*\)'.*/\1/p" app/public/wp-config.php)
DB_PASS=$(sed -n "s/^define( 'DB_PASSWORD', *'\([^']*\)'.*/\1/p" app/public/wp-config.php)
MYSQL_PWD="$DB_PASS" "$MYSQL" --protocol=TCP -h 127.0.0.1 -P 10011 -u "$DB_USER" "$DB_NAME" -e "SELECT 1;"
```

Mandatory safety:

-   Export the current value before overwriting it, and keep it outside
    both installations.
-   Use `--raw` (`-r`) when exporting `post_content`, otherwise newlines
    are escaped and the export is unusable.
-   Escape SQL string values with code, not by hand. Build the statement
    in Node using `String.fromCharCode(92)` for backslashes and
    `String.fromCharCode(39)` for quotes; do not type backslash literals
    into a heredoc.
-   Scope updates: `WHERE ID = 14 AND post_type = 'wp_template'`.
-   Preserve identity: never change `post_name`, `post_type`,
    `post_status`, `post_parent` or the `wp_theme` term.
-   Never touch unrelated rows. Never drop tables. Never import dumps over
    the live schema.

------------------------------------------------------------------------

## 10. Verification protocol

Checks that are cheap and repeatable:

```bash
curl -sk -o /dev/null -w "%{http_code}\n" https://adepa-local.local/
curl -sk -o /dev/null -w "%{http_code}\n" https://adepa-local.local/wp-login.php
```

Rules for honest reporting:

-   Count **occurrences**, not matching lines. `grep -c` counts lines and
    lies on minified HTML.
-   Rendering behaviour that needs JavaScript should be proven in a
    browser (headless Chrome with `--virtual-time-budget` and
    `--dump-dom` is enough to see the ticker advance).
-   WordPress editor behaviour (List View, invalid-content warnings,
    Media Library) cannot be verified without an authenticated session.
    Say so explicitly instead of implying it was checked.
-   Report the checks that ran, the checks that failed and the checks that
    could not run. Never present an assumption as a pass.
-   Front-end HTML proves what WordPress rendered, not what Gutenberg
    validated. Use block serialization rules (§4) for editor-facing
    markup.

------------------------------------------------------------------------

## 11. Machine quirks to expect

-   Shell is Git Bash on Windows: use POSIX commands and forward slashes.
-   `php`, `wp`, `mysql`, `mysqld`, `docker` are **not** on PATH. Use the
    Local binaries under `%APPDATA%\Local\lightning-services\`.
-   The MariaDB client cannot authenticate against MySQL 8.4
    (`caching_sha2_password` plugin error). Always use the `mysql-8.4.0`
    client.
-   `wmic` is unavailable — do not rely on it to inspect processes.
-   Node resolves `/tmp/...` as `C:\tmp\...`; write temporary files to the
    project (and delete them) or use a relative path.
-   Heredocs through automation can mangle backslashes. Prefer
    `String.fromCharCode()` over escape sequences in generated scripts.
-   WordPress escapes `--` inside block comment JSON as `\u002d\u002d`.
    A class like `adepa-index__image--01` therefore appears escaped in the
    block comment and literally in the rendered markup, so a single search
    for the literal form can miss the comment and make a block look
    absent. Search the unescaped prefix (`adepa-index__image`) and inspect
    the region when counting blocks in stored content.
-   `FILES/` sits inside the public web root. Never place credentials,
    keys, database dumps or personal data here.

------------------------------------------------------------------------

## 12. Definition of done

A change is complete only when all of these are true:

1. The authoritative source (pattern, template, CSS, JS) is the thing that
    changed — not a database copy of it.
2. Patterns still register; the homepage template still references
    patterns only.
3. Block markup matches Gutenberg's own serialization.
4. `style.css` version bumped for any asset change.
5. Site responds 200, `wp-login.php` responds 200, no PHP errors in
   output.
6. Homepage sections appear exactly once, in the original order:
   hero (with banner) → featured → menu discovery → brand story →
   delivery → order CTA.
7. Any database write has a stored backup and a documented restore path.
8. The report states what was verified, how, and what remains unverified.

------------------------------------------------------------------------

## 13. Reporting format

Keep reports short and specific:

-   **Cause** — the mechanism, with file and line evidence.
-   **Change** — exact files/records touched.
-   **Verification** — command or check, and the observed result.
-   **Limits** — what could not be checked and why.
-   **Next step** — one concrete action if anything is outstanding.
