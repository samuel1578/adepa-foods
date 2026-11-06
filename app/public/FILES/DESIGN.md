# ADEPA FOOD HUT

## Design System & Visual Direction

**File:** `DESIGN.md`\
**Version:** 1.0 --- Implementation foundation\
**Status:** Authoritative design specification\
**Platform:** WordPress \| **Backend:** PHP \| **Development:** Local +
VS Code\
**Product principle:** **One connected system. Three user experiences.**

------------------------------------------------------------------------

## 1. Purpose and authority

This document is the visual and interaction source of truth for ADEPA
Food Hut across three connected experiences:

1.  **Public website** --- brand discovery, menu and delivery
    information.
2.  **Customer portal** --- registration, ordering, order history and
    status tracking.
3.  **Admin dashboard** --- order operations, menu, availability,
    delivery, payments and content management.

The PRD defines product scope. The SRS defines system behaviour. This
file governs visual design, interface patterns and presentation
conventions.

### Non-negotiable implementation rules

-   Read this file before designing or coding any interface.
-   Do not use a generic restaurant theme or generic SaaS dashboard
    template.
-   Do not make the website a single scrolling page. Main navigation
    opens distinct pages.
-   Do not invent dishes, prices, opening hours, delivery charges, phone
    numbers, testimonials, awards or social profiles.
-   Clearly identify temporary imagery and placeholder content.
-   Keep business logic out of the theme and page-builder layouts.
-   Use the tokens and components defined here. Do not invent new styles
    casually.
-   Do not install a page builder, commerce engine, animation library or
    other dependency without explaining the need and obtaining approval.
-   If a requirement is unclear, flag it rather than guessing.

## 2. Brand direction: Bold African Food Editorial

ADEPA should feel like a confident contemporary food brand with the
visual quality of an independent food publication and the warmth of a
welcoming food business.

The visual character is **editorial, expressive, warm, tactile and
highly legible**.

The experience should communicate: - Food is the hero. - The brand has
confidence and personality. - The business is welcoming and
accessible. - Ordering is clear and uncomplicated. - The business is
operationally credible.

### Visual signature

Build recognition through: 1. Oversized, assertive typography. 2. Warm
cream and deep charcoal as the dominant canvas. 3. Pepper-red accents
used with intent. 4. Large, carefully cropped food photography. 5.
Editorial asymmetry and strong alignment. 6. Short, direct copy. 7.
Deliberate contrast and generous negative space.

### Avoid

-   A centred generic hero with stock photo and two default buttons.
-   Repeated rows of three identical cards.
-   Every section having the same background and centred heading.
-   Excessive rounded corners, gradients, shadows or glass effects.
-   Superficial decorative patterns or stereotypical visual motifs.
-   Tiny thumbnails as the primary expression of the brand.
-   Animation that delays access to menu or ordering actions.

## 3. Design principles

1.  **Typography leads.** Scale, weight, line breaks and alignment
    create hierarchy.
2.  **Food photography earns its space.** Images must be relevant,
    appetising and art-directed.
3.  **Every section has a purpose.** Remove sections that add no
    information or useful action.
4.  **Contrast creates rhythm.** Alternate light, dark and accent
    surfaces deliberately.
5.  **Function before flourish.** Menu, account, basket, ordering and
    tracking remain obvious.
6.  **Consistency without monotony.** Reusable components must allow
    varied compositions.
7.  **Mobile is first-class.** Recompose for small screens; do not
    merely shrink desktop.

## 4. Colour system

### Core palette

  Token          Hex         Purpose
  -------------- ----------- ----------------------------------
  ADEPA Cream    `#F5F0E6`   Main warm canvas
  ADEPA Ink      `#202019`   Primary text and dark surfaces
  Pepper Red     `#A63C27`   Primary accent and key actions
  Golden Spice   `#C68A43`   Secondary highlight
  Muted Olive    `#68704B`   Supporting accent
  White          `#FFFFFF`   Clean surfaces and reversed text
  Muted Text     `#706F67`   Secondary text on light surfaces
  Warm Line      `#DED8CC`   Borders and separators
  Soft Surface   `#EEE8DC`   Subtle surface variation

### Semantic tokens

``` css
:root {
  --color-bg: #F5F0E6;
  --color-surface: #EEE8DC;
  --color-surface-strong: #FFFFFF;
  --color-text: #202019;
  --color-text-muted: #706F67;
  --color-border: #DED8CC;
  --color-brand: #A63C27;
  --color-brand-hover: #87301F;
  --color-highlight: #C68A43;
  --color-support: #68704B;
  --color-success: #426747;
  --color-warning: #95611E;
  --color-danger: #A33227;
  --color-info: #365F79;
  --color-on-dark: #F5F0E6;
  --color-on-brand: #FFFFFF;
}
```

### Usage rules

-   Cream is the default page canvas; ink is the default text.
-   Pepper red is the primary action colour. Use it selectively.
-   Golden spice is a highlight, not a long-form text colour.
-   Olive is a supporting accent, not a dominant surface.
-   Do not use all accent colours in every component.
-   Never use low-contrast gold or olive text on cream.
-   Status colour must always be paired with a text label.
-   Meet WCAG 2.2 AA contrast: 4.5:1 for normal text and 3:1 for large
    text and meaningful UI graphics.

## 5. Typography

Typography is a defining part of ADEPA's identity. It must be bold,
expressive and disciplined.

### Recommended font pairing

-   **Display/headings:** Bricolage Grotesque --- hero headlines, major
    section titles and expressive display moments.
-   **Body/interface:** Manrope --- paragraphs, navigation, buttons,
    forms and UI.
-   **Optional utility:** system monospace only for order references or
    technical metadata.

Use no more than two primary font families. Confirm webfont licensing.
Prefer self-hosted WOFF2, load only required weights, use
`font-display: swap`, and provide fallbacks. Do not block rendering on
remote font services.

If the recommended fonts cannot be used reliably, choose close licensed
alternatives and document the substitution.

### Typographic scale

  Role             Desktop     Mobile Weight / line-height
  ------------ ----------- ---------- ------------------------------
  Display XL     76--104px   48--64px 700--800 / 0.92--1.04
  Display L       64--80px   42--54px 700--800 / 0.94--1.05
  H1              52--64px   38--46px 700--800 / 0.98--1.12
  H2              38--48px   30--36px 700--800 / 1.0--1.15
  H3              26--32px   23--28px 650--750 / 1.1--1.2
  H4              20--24px   19--22px 650--750 / 1.15--1.25
  Lead            19--22px   18--20px 400--500 / 1.45--1.6
  Body            16--18px   16--17px 400--500 / 1.55--1.75
  Small           13--14px   13--14px 400--500 / 1.4--1.5
  Micro           11--12px   11--12px 700--800 / short labels only

Suggested tokens:

``` css
:root {
  --font-display: "Bricolage Grotesque", Arial, sans-serif;
  --font-body: "Manrope", Arial, sans-serif;
  --text-display-xl: clamp(3rem, 7.2vw, 6.5rem);
  --text-display-lg: clamp(2.65rem, 5.5vw, 5rem);
  --text-h1: clamp(2.375rem, 4.6vw, 4rem);
  --text-h2: clamp(1.875rem, 3.6vw, 3rem);
  --text-h3: clamp(1.4375rem, 2.4vw, 2rem);
  --text-body: 1rem;
  --text-small: 0.875rem;
}
```

### Headline composition

-   Use deliberate line breaks and compact line lengths.
-   Left alignment, offsets and split-column compositions are
    encouraged.
-   Do not centre every heading.
-   Avoid long all-caps headlines.
-   Do not shrink a headline just to force it into a predetermined box;
    change the layout.

## 6. Layout, grid and spacing

### Containers

``` css
:root {
  --container-wide: 1440px;
  --container-main: 1240px;
  --container-reading: 760px;
  --page-gutter: clamp(20px, 5vw, 80px);
}
```

Use the wide container for hero/editorial compositions, main container
for menu and standard content, and reading container for long-form text.

### Grid

-   Desktop: 12-column conceptual grid.
-   Tablet: 8-column conceptual grid.
-   Mobile: 4-column conceptual grid.
-   CSS Grid for major compositions; Flexbox for simple alignment.
-   Maintain consistent alignment even in asymmetrical layouts.
-   Avoid absolute positioning for core layout.

### Spacing scale

Use a 4px base scale:

  Token            Value
  -------------- -------
  `--space-1`        4px
  `--space-2`        8px
  `--space-3`       12px
  `--space-4`       16px
  `--space-5`       20px
  `--space-6`       24px
  `--space-8`       32px
  `--space-10`      40px
  `--space-12`      48px
  `--space-16`      64px
  `--space-20`      80px
  `--space-24`      96px
  `--space-32`     128px

Typical section padding: desktop 88--128px, tablet 64--88px, mobile
48--72px. Use tighter spacing for forms and operational screens.

### Breakpoints

``` css
/* Mobile 0–479 | Large mobile 480–767 | Tablet 768–1023
   Desktop 1024–1279 | Wide 1280+ */
```

Use content-driven adjustments where needed. Test intermediate widths,
not only preset device screenshots.

## 7. Shape, borders and elevation

ADEPA should feel tactile and editorial, not like a generic rounded SaaS
interface.

  Token               Value Use
  ----------------- ------- ---------------------------
  `--radius-sm`         4px Compact controls
  `--radius-md`         8px Inputs and buttons
  `--radius-lg`        14px Larger image panels/cards
  `--radius-pill`     999px Small chips only

Prefer square or modestly rounded geometry. Use 1px warm-neutral
borders. Use shadows only when they clarify layering, such as dropdowns
and modals.

``` css
--shadow-overlay: 0 16px 48px rgba(32, 32, 25, 0.14);
```

Do not use shadows as a substitute for spacing or contrast.

## 8. Photography and image art direction

Real ADEPA food photography is preferred. Images should be well lit,
appetising, colour-accurate, textured and consistently art-directed.

Avoid watermarked stock, unrelated dishes, stretched low-resolution
images, repeated hero imagery, embedded text and AI-generated food
presented as actual menu photography.

### Image ratios

  Use                 Preferred ratio
  ------------------- ---------------------------------
  Homepage hero       4:5, 3:4 or cinematic wide crop
  Menu item           4:3 or 1:1
  Featured dish       4:5
  Brand/story image   3:4 or 4:5
  Thumbnail           1:1

Use WordPress responsive image sizes. Set dimensions to reduce layout
shift. Lazy-load below-the-fold imagery, but prioritise the main hero
image. Add meaningful alt text to informative images; use empty alt text
for decorative images. Menu information must never exist only inside an
image.

Use the WordPress Media Library. Images must be replaceable by the site
owner without code changes.

## 9. Component system

Build reusable components with documented variants. Each component must
have one clear responsibility, use design tokens, support keyboard/touch
interaction and define relevant states.

### Global components

`SiteHeader`, `PrimaryNavigation`, `MobileNavigation`, `SiteFooter`,
`PageContainer`, `Section`, `SectionHeading`, `Eyebrow`, `Button`,
`TextLink`, `StatusBadge`, `FormField`, `Notice`, `Modal`, `Toast`,
`LoadingState`, `EmptyState`, `ErrorState`.

### Public components

`EditorialHero`, `FeaturedDish`, `DishCard`, `MenuCategoryNavigation`,
`MenuGrid`, `BrandStoryBlock`, `DeliveryAreaBlock`, `CTASection`,
`ContactDetails`.

### Customer components

`AccountShell`, `AccountNavigation`, `OrderCard`, `OrderSummary`,
`BasketLineItem`, `BasketSummary`, `DeliveryAddressForm`,
`PaymentMethodSelector`, `OrderTrackingTimeline`, `OrderStatusEvent`.

### Admin components

`AdminShell`, `AdminSidebar`, `AdminTopbar`, `DashboardMetric`,
`OrderQueue`, `OrderDetailPanel`, `OrderStatusControl`,
`MenuItemEditor`, `AvailabilityControl`, `BusinessHoursEditor`,
`DeliveryConfirmationPanel`, `PaymentRecordControl`,
`NotificationSettings`.

Do not duplicate components for each page. Use variants where
appropriate. Do not abstract trivial one-off markup unnecessarily. Keep
business rules out of visual components.

## 10. Buttons and calls to action

### Primary

Pepper-red background, white text, strong weight, modest radius, clear
hover/focus state and target height around 48px.

### Secondary

Transparent or cream surface, ink border and text, same height and
typographic weight as primary.

### Text action

For lower-emphasis navigation such as "View details". Maintain a clear
focus state and comfortable hit area.

Use action-specific labels: "View menu", "Add to order", "Submit order",
"Create account". Avoid "Click here". One primary action should dominate
a section. Do not imply an order is accepted before administrator
approval.

## 11. Navigation

Public navigation supports:

-   Home
-   Menu
-   About
-   Delivery
-   Contact
-   My Account

The brand returns to Home. Menu opens `/menu`; it must not scroll to a
homepage section as a substitute for a dedicated page.

Header should be clear and compact. Mobile navigation must be keyboard
accessible and touch-friendly. Sticky navigation is optional only if it
improves usability without consuming excessive space. Account and basket
controls require accessible names and must not expose private
information.

## 12. Homepage composition

The homepage is the first expression of the design system. It must be
art-directed, not assembled from generic blocks.

Required content: 1. Header and navigation. 2. Hero with a distinctive
brand statement, compelling food image and clear menu/order action. 3.
Featured food sourced from actual menu data. 4. Menu discovery. 5.
Concise brand introduction. 6. Delivery information naming Milton Keynes
and Northampton as intended areas, subject to manual confirmation. 7.
Strong final call to action. 8. Footer with navigation, confirmed
contact details and policy links.

### Hero rules

-   Establish the brand in the first viewport.
-   Use confident headline typography and deliberate line breaks.
-   Give food photography meaningful visual weight.
-   Make the route to the menu obvious.
-   Do not invent business claims or operating details.
-   Recompose the hero for mobile; do not simply shrink it.

Do not force a centred two-column layout if a more distinctive
composition better serves the content.

### Featured food

Use actual published menu data when available. Show name, concise
description, price and availability only when supplied and current.
Sold-out items must be labelled and not orderable. Do not invent dishes
or prices to fill empty cards.

### Delivery messaging

Milton Keynes and Northampton are intended delivery areas. Every address
remains subject to manual serviceability confirmation. Do not promise
universal coverage, automatic delivery pricing or a delivery time that
has not been confirmed.

## 13. Menu and dish design

The Menu page is a functional ordering interface, not just a gallery.

-   Clear title and concise introduction.
-   Category navigation usable on mobile.
-   Scannable menu layout.
-   Dish image, name, description, price and availability.
-   Clear add-to-order action for available items.
-   Sold-out items remain visible but cannot be added.
-   Basket access is easy to find.
-   Menu remains browsable when ordering is closed.

Dish card priority: image → name → description → price → availability →
action. Avoid unnecessary ratings, icons, tags and badges.

Sold-out state must use a readable text label, visual de-emphasis and a
disabled/removed add action. Do not claim when it will return unless
confirmed.

## 14. Customer portal

The portal should feel like an extension of ADEPA, not a generic
WordPress account screen. Retain the brand type, colours, buttons and
status language, but use a calmer and more compact layout than the
marketing homepage.

Screens: Register, Login, Password Reset, Account Overview, Profile, My
Orders, Order Details and Order Tracking.

Forms must have visible labels, required/optional indicators, inline
validation, helpful errors and preserved values after recoverable
errors. Use appropriate email, phone and address input types.

### Interactive order tracking

The timeline must reflect persisted order status, never simulated
progress.

1.  Order Received.
2.  Awaiting Approval.
3.  Accepted.
4.  Preparing.
5.  Dispatched.
6.  Delivered.

Rejected and Cancelled are terminal/exception states.

The timeline must show completed stages, emphasise the current stage,
explain it in plain language, show timestamps when available and
announce updates accessibly. Never imply acceptance before staff
approval or imply live GPS tracking.

## 15. Admin dashboard

The admin is an operational tool. It should be consistent with ADEPA but
optimised for speed, clarity and accuracy.

Use a calm workspace, compact structured layouts, tables, filters,
readable badges and clear action hierarchy. Avoid oversized marketing
headings and decorative animation. Consequential actions must be
distinct and confirmed.

Modules: Dashboard, Orders, Order Tracking, Menu Management,
Availability, Business Hours, Customers, Delivery Management, Website
Content, Notifications and Settings.

### Order queue

Make order reference, submission time, customer, order value, delivery
location, payment method/status, current status and next action easy to
scan. Provide practical status/date filters and search.

### Order detail

Show customer/contact information, order-time item/price snapshots,
delivery address/instructions, serviceability decision, confirmed or
pending delivery charge, payment method/status, status history and
authorised actions.

Require confirmation for rejection, cancellation and other consequential
actions. Support a reason where relevant.

### Status colour language

-   Pending / Awaiting Approval: amber.
-   Accepted: olive/green.
-   Preparing: blue/ink secondary.
-   Dispatched: pepper or blue.
-   Delivered: green.
-   Rejected / Cancelled: red.
-   Awaiting payment: amber.
-   Paid: green.

Always pair colour with text.

## 16. Forms, feedback and interface states

Every interactive control defines Default, Hover (where supported),
Focus-visible, Active, Disabled, Loading and Error states; Success where
relevant.

Use clear labels above inputs, consistent control heights, visible
borders and focus rings, help text near fields and comfortable mobile
spacing.

Confirm successful actions in plain language. Explain why an action
cannot proceed. Do not rely on colour, animation or icons alone. Do not
discard entered data after a recoverable failure.

## 17. Motion and interaction

Motion adds polish; it is not the brand identity.

Appropriate: button feedback, dropdown transitions, small image hover
treatment, subtle section reveals, modal/drawer transitions and
status-update feedback.

Avoid scroll-jacking, large parallax, continuous decorative motion,
forced intro animations and anything that delays ordering.

``` css
:root {
  --motion-fast: 140ms;
  --motion-standard: 220ms;
  --motion-panel: 280ms;
  --motion-reveal: 420ms;
  --ease-standard: cubic-bezier(0.2, 0.7, 0.2, 1);
  --ease-emphasis: cubic-bezier(0.16, 1, 0.3, 1);
}

@media (prefers-reduced-motion: reduce) {
  *,
  *::before,
  *::after {
    scroll-behavior: auto !important;
    animation-duration: 0.01ms !important;
    animation-iteration-count: 1 !important;
    transition-duration: 0.01ms !important;
  }
}
```

Do not add Framer Motion to a conventional PHP WordPress theme solely
for decoration. Use CSS and lightweight JavaScript unless the
architecture genuinely includes React and the dependency is justified.
Isolate React interactions and avoid loading them on every page.

## 18. Accessibility

Target WCAG 2.2 AA practices for core journeys:

-   Semantic landmarks and correct heading hierarchy.
-   Keyboard access to navigation, forms, dialogs and controls.
-   Visible focus indicators.
-   Sufficient colour contrast.
-   Labels and instructions for fields.
-   Text alternatives for informative images.
-   No meaning conveyed by colour alone.
-   Accessible validation and error announcements.
-   Reduced-motion support.
-   Touch targets approximately 44 × 44 CSS pixels where practical.
-   Status updates announced without excessive interruptions.
-   Correct focus management in dialogs.

Accessibility is part of design, not a final polish task.

## 19. Content and voice

Brand voice: warm, direct, confident, welcoming, human and clear.

Avoid empty superlatives, unsupported claims, forced slang, generic
corporate language, clichés and excessive exclamation marks.

Use concise headings, short paragraphs and action-oriented button
labels. Clearly explain delivery limitations. Never invent prices, menu
items, opening times, guarantees, reviews or contact details. Mark
development placeholders clearly and replace them before launch.

## 20. WordPress implementation conventions

### Separation of responsibilities

**Theme / presentation** - Global styles and design tokens. - Templates
and template parts. - Header, footer and navigation. - Page layouts and
visual patterns. - Presentation-only blocks.

**ADEPA business functionality** - Menu and availability rules. - Basket
and order processing. - Customer-specific order access. - Status
transitions and history. - Delivery confirmation. - Payment records. -
Business hours and cut-offs. - Notifications.

Business logic belongs in a dedicated plugin or the selected commerce
engine, not solely in `functions.php`, theme templates or page-builder
layouts.

### Editing experience

Preferred direction is the native WordPress block editor / Site Editor
unless the client explicitly chooses Elementor after a trade-off review.

Build editable patterns/sections for hero content, featured food, brand
story, delivery information, calls to action and contact information.
Editing presentation must not allow the owner to break the order engine.

Use block patterns where suitable. Use custom blocks only for structured
reusable components. Keep operational data out of free-form page
content. Use the WordPress Media Library.

### CSS

-   Define tokens centrally, using `theme.json` and/or a central
    stylesheet.
-   Scope component styles to avoid plugin/admin collisions.
-   Avoid `!important` except for a documented integration conflict.
-   Avoid inline styles for global design decisions.
-   Avoid broad selectors that unintentionally affect plugin interfaces.
-   Keep CSS modular and avoid duplicated token values.

### JavaScript

-   Use only where interaction requires it.
-   Enqueue scripts only on relevant pages.
-   Prefer progressive enhancement.
-   Do not make core content depend on JavaScript rendering.
-   Avoid unnecessary React/animation libraries.
-   Handle loading, error and empty states.

### PHP

-   Follow WordPress coding standards.
-   Escape output; validate and sanitise input.
-   Check capabilities for privileged operations.
-   Use nonces for state-changing browser requests where appropriate.
-   Use prepared queries for custom SQL.
-   Keep plugin and theme responsibilities separate.
-   Never expose credentials, internal notes or another customer's
    personal data.

## 21. Performance

The site must be visually rich without becoming heavy.

-   Use responsive image sizes and modern formats.
-   Avoid autoplay video unless explicitly approved and optimised.
-   Load only required font weights.
-   Avoid unnecessary third-party scripts.
-   Reserve image dimensions to prevent layout shift.
-   Lazy-load below-the-fold images; prioritise the hero image.
-   Avoid oversized animation libraries.
-   Test public, account and order pages independently.
-   Never cache private account/order data in a way that can expose it
    to another customer.

Aim for good Core Web Vitals: LCP ≤ 2.5s, INP ≤ 200ms and CLS ≤ 0.1
under representative real-world conditions. These are targets, not
guarantees.

## 22. Canonical starter tokens

The following is the canonical initial token set. Extend only when a
genuine component need exists.

``` css
:root {
  /* Brand */
  --adepa-cream: #F5F0E6;
  --adepa-ink: #202019;
  --adepa-pepper: #A63C27;
  --adepa-spice: #C68A43;
  --adepa-olive: #68704B;
  --adepa-white: #FFFFFF;

  /* Semantic */
  --color-bg: var(--adepa-cream);
  --color-surface: #EEE8DC;
  --color-surface-strong: #FFFFFF;
  --color-text: var(--adepa-ink);
  --color-text-muted: #706F67;
  --color-border: #DED8CC;
  --color-primary: var(--adepa-pepper);
  --color-primary-hover: #87301F;
  --color-highlight: var(--adepa-spice);
  --color-support: var(--adepa-olive);

  /* Typography */
  --font-display: "Bricolage Grotesque", Arial, sans-serif;
  --font-body: "Manrope", Arial, sans-serif;
  --text-display-xl: clamp(3rem, 7.2vw, 6.5rem);
  --text-display-lg: clamp(2.65rem, 5.5vw, 5rem);
  --text-h1: clamp(2.375rem, 4.6vw, 4rem);
  --text-h2: clamp(1.875rem, 3.6vw, 3rem);
  --text-h3: clamp(1.4375rem, 2.4vw, 2rem);
  --text-body: 1rem;
  --text-small: 0.875rem;

  /* Layout */
  --container-wide: 90rem;
  --container-main: 77.5rem;
  --container-reading: 47.5rem;
  --page-gutter: clamp(1.25rem, 5vw, 5rem);

  /* Spacing */
  --space-1: 0.25rem;
  --space-2: 0.5rem;
  --space-3: 0.75rem;
  --space-4: 1rem;
  --space-5: 1.25rem;
  --space-6: 1.5rem;
  --space-8: 2rem;
  --space-10: 2.5rem;
  --space-12: 3rem;
  --space-16: 4rem;
  --space-20: 5rem;
  --space-24: 6rem;
  --space-32: 8rem;

  /* Shape */
  --radius-sm: 4px;
  --radius-md: 8px;
  --radius-lg: 14px;
  --radius-pill: 999px;

  /* Motion */
  --motion-fast: 140ms;
  --motion-standard: 220ms;
  --motion-panel: 280ms;
  --motion-reveal: 420ms;
  --ease-standard: cubic-bezier(0.2, 0.7, 0.2, 1);
  --ease-emphasis: cubic-bezier(0.16, 1, 0.3, 1);

  /* Elevation */
  --shadow-overlay: 0 16px 48px rgba(32, 32, 25, 0.14);
}
```

## 23. Design acceptance checklist

A page is not approved until relevant checks pass.

### Brand and hierarchy

-   [ ] Recognisably ADEPA, not a generic template.
-   [ ] Clear typographic hierarchy with intentional bold display
    headings.
-   [ ] Palette and semantic colours used correctly.
-   [ ] No excessive cards, gradients, shadows or rounded UI.

### Layout and content

-   [ ] Deliberate visual rhythm and alignment.
-   [ ] Relevant, high-quality and correctly cropped photography.
-   [ ] No invented business facts or menu data.
-   [ ] Primary action is immediately understandable.

### Responsive

-   [ ] Desktop, tablet and mobile reviewed.
-   [ ] No horizontal overflow.
-   [ ] Headlines wrap naturally.
-   [ ] Navigation and forms work on touch devices.
-   [ ] Image focal points remain appropriate.

### Interaction and accessibility

-   [ ] Keyboard navigation and visible focus work.
-   [ ] Controls define required interaction states.
-   [ ] Contrast is adequate.
-   [ ] Reduced-motion preferences are respected.
-   [ ] Errors and status are understandable without colour alone.

### WordPress quality

-   [ ] Owner-editable content uses the selected WordPress editor.
-   [ ] Components are reusable.
-   [ ] Business logic is not embedded in the theme.
-   [ ] No unnecessary dependencies.
-   [ ] Media uses the WordPress Media Library.
-   [ ] Core content remains usable if decorative JavaScript fails.

## 24. Homepage acceptance criteria

The homepage is approved only when:

1.  It establishes ADEPA's identity immediately.
2.  The hero is distinctive and offers a clear route to the menu.
3.  Food photography has meaningful visual weight.
4.  Typography and composition are editorial and confident.
5.  Featured dishes come from actual menu data or are clearly marked
    placeholders.
6.  Delivery information accurately describes Milton Keynes and
    Northampton as intended areas, subject to confirmation.
7.  Primary navigation opens distinct pages.
8.  The page is responsive and usable on mobile.
9.  It contains no invented business facts.
10. It uses reusable WordPress-compatible components or patterns.
11. It avoids unnecessary animation dependencies.
12. It establishes patterns that can be reused throughout the product.

## 25. Instructions to AI coding agents

Before coding: 1. Inspect the WordPress installation, active theme,
plugins and project structure. 2. Report what exists and what files you
intend to change. 3. Identify conflicts with this specification. 4. Do
not replace the active theme, install a page builder or add dependencies
without explaining why.

During implementation: 1. Implement design tokens first. 2. Establish
typography and global layout. 3. Build header and footer. 4. Build
reusable components. 5. Implement the homepage. 6. Review desktop,
tablet and mobile. 7. Update this file only when an approved decision
changes.

After implementation, report: - Files created and modified. - How tokens
are implemented. - Font and asset choices. - Temporary
assets/placeholders. - Which content is editable in WordPress. -
Responsive and accessibility checks completed. - Dependencies
introduced. - Unresolved decisions.**Do not optimise for producing the most code. Optimise for a distinctive, coherent and maintainable ADEPA experience. The result must feel designed for ADEPA Food Hut, not selected from a theme catalogue.**

------------------------------------------------------------------------

## 26. Implementation record — public website foundation

**Recorded:** 5 November 2026  
**Scope:** public WordPress theme, header/footer, homepage and starter pages.
The customer portal and admin dashboard are not part of this phase.

This is a record of what was implemented against v1.0. It does not change
the rules in sections 1–25.

### 26.1 Installation inspected

-   WordPress core installed; **no plugins**; only Twenty Twenty-Five,
    Twenty Twenty-Four and Twenty Twenty-Three present; uploads empty.
-   The active theme could not be read from the database in the build
    environment. The new theme was **not activated**.
-   Core themes were left untouched so the owner can roll back.

### 26.2 Files created

``` text
wp-content/themes/adepa-food-hut/
  style.css                     theme metadata
  theme.json                    tokens, fonts, element styles, template parts
  functions.php                 loads inc/setup.php and inc/starter-content.php
  inc/setup.php                 supports, asset enqueue, font preload, pattern category
  inc/starter-content.php       7 starter pages, seeded once on activation
  parts/header.html             skip link, wordmark, navigation, account, menu CTA
  parts/footer.html             brand, navigation, information, kitchen column, notice
  patterns/hero.php             adepa/hero
  patterns/featured.php         adepa/featured
  patterns/menu-discovery.php   adepa/menu-discovery
  patterns/brand-story.php      adepa/brand-story
  patterns/delivery.php         adepa/delivery
  patterns/order-cta.php        adepa/order-cta
  patterns/page-header.php      adepa/page-header
  templates/front-page.html     assembles the six homepage patterns
  templates/page.html           page header + post content
  templates/index.html          fallback shell for archives and posts
  assets/css/main.css           canonical tokens + all public components
  assets/css/editor.css         editor-canvas corrections only
  assets/js/main.js             progressive reveal + current-page state
  assets/fonts/                 two local WOFF2 files + LICENSE.txt
  assets/images/                hero.jpg + four labelled placeholder SVGs
```

### 26.3 Tokens and typography

-   The canonical token set in §22 is declared verbatim in `main.css`
    (`--adepa-*` brand values, `--color-*`, `--font-*`, `--text-*`,
    `--container-*`, `--space-*`, `--radius-*`, motion and elevation).
    Component rules use local aliases that resolve to those tokens.
-   `theme.json` mirrors the same palette and type scale as presets, so the
    block editor cannot drift from the front end. Custom colour pickers and
    default gradients/duotones are disabled.
-   Type: Bricolage Grotesque (display) and Manrope (body), both self-hosted
    with `font-display: swap` and preloaded from `wp_head`. No Google Fonts
    runtime request.
-   **Documented deviation:** `--color-text-muted` is `#66655D` instead of the
    canonical `#706F67`. At `#706F67`, small text measured 4.45:1 on cream and
    4.14:1 on the soft surface, below WCAG 2.2 AA. `#66655D` clears 4.5:1 on
    both. This needs design sign-off, or the canonical value can be restored
    by editing the one token.

### 26.4 Homepage composition

| Order | Pattern | Composition |
| --- | --- | --- |
| 1 | `adepa/hero` | 7/5 asymmetric grid, oversized headline with pepper second line, supplied hero photograph, spice offset, rotating delivery stamp, ink ticker |
| 2 | `adepa/featured` | Dark section, 7/5 section head, three dishes on a 12-column grid at 1/5, 6/10 and 10/13 with vertical offsets, 4:5 imagery |
| 3 | `adepa/menu-discovery` | Cream split: statement and ordering rules numbered 01–03, outlined decorative word |
| 4 | `adepa/brand-story` | Pepper-red split: statement, 3:4 image and three confirmed operating facts |
| 5 | `adepa/delivery` | Soft surface: two area rows at display scale, three confirmation steps, boxed caveat |
| 6 | `adepa/order-cta` | Ink section, display headline with spice emphasis, caveat and menu/account actions |

Header, footer and sections alternate cream, ink, cream, pepper, surface and ink;
no section repeats the same background and centred heading. All sections are
registered patterns in the **ADEPA Food Hut** category and appear in the
Site Editor's pattern inserter.

### 26.5 Fonts, imagery and placeholders

-   The homepage hero uses the owner-supplied `IMAGES/hero.jpg`, copied to
    `assets/images/hero.jpg` and served from the theme. It is shown at its own
    1200 × 1166 ratio rather than cropped to 4:5, so the plate is not cut at the
    sides; it carries descriptive alt text and no placeholder label. Usage
    rights for this photograph should be confirmed before launch.
-   The four remaining images (featured dishes 01–03 and the brand story) are
    geometric SVGs in the approved palette and are labelled inside the artwork.
    They are not stock or AI food presented as ADEPA food. Replace each through
    the Media Library; the image blocks keep their aspect-ratio wrappers.
-   Dish cards intentionally show `Dish name`, a neutral description, `£—` and
    `Availability from live menu`, plus a visible preview note. No dish, price
    or availability claim is invented.
-   Contact details, operating hours, delivery charges and approved policy
    text are absent because they are unconfirmed; the affected pages and the
    footer say so explicitly.

### 26.6 Editing model

-   Hero, featured dishes, menu introduction, brand story, delivery and final
    CTA are editable patterns in the Site Editor. Copy and images are ordinary
    core blocks.
-   `Menu`, `About`, `Delivery`, `Contact`, `My Account`, `Privacy` and `Terms`
    pages are created once on theme activation, only when a page with that slug
    does not already exist. No front-page or reading settings are changed.
-   Header navigation uses inline navigation-link blocks, so it works without
    a `wp_navigation` database post. The mobile overlay inherits ink/cream.

### 26.7 Dependencies

None beyond WordPress. No page builder, React, Framer Motion, icon pack, font
CDN or third-party script was added.

### 26.8 Verification performed and limits

Static checks passed: `theme.json` parses; all seven pattern headers declare
`adepa/` slugs; every pattern referenced by a template exists; CSS brace counts
balance; all four remaining SVGs are well formed; `hero.jpg` is a valid
1200 × 1166 JPEG; both font files carry the WOFF2
signature; colour pairs were measured (ink/cream 14.42:1, pepper/cream 5.61:1,
cream/pepper 5.61:1, spice/ink 5.55:1, white/pepper 6.37:1, muted/cream and
muted/surface now above 4.5:1).

This environment has no `php`, `wp` or `mysql` CLI and the site is not served,
so the theme has **not** been activated, rendered, PHP-linted, or reviewed in a
browser. Responsive, keyboard and screen-reader behaviour are implemented but
not yet verified in a running install.

### 26.9 Approval and launch checklist

1.  Activate **ADEPA Food Hut** at Appearance → Themes (activation seeds the
    seven starter pages once; existing pages are untouched).
2.  Replace the four remaining placeholder SVGs with approved photography and
    confirm the usage rights for the supplied hero photograph.
3.  Supply the live menu (dishes, descriptions, prices, availability), operating
    hours, confirmed contact details, delivery coverage/charges and approved
    Privacy/Terms text.
4.  Confirm or revert the muted-token accessibility correction in §26.3.
5.  Link the account navigation to the customer-portal implementation when that
    phase exists; the current page is an honest holding page.
6.  Review desktop, tablet and mobile in the running site, including the mobile
    navigation overlay, before launch.

### 26.10 Post-activation image-block correction — 5 November 2026

After activation, the Site Editor saved a database copy of the `front-page`
template that overrode `templates/front-page.html`. That saved copy still held
the pre-correction image markup: old `width`/`height` attributes on `<img>`
(which the Image block does not serialise) and `http://` URLs to a deleted
placeholder SVG. The Image block therefore failed validation and the hero
image could not load.

Correction:

-   All five Image blocks in `patterns/hero.php`, `patterns/featured.php` and
    `patterns/brand-story.php` now use canonical core/image markup. Dimensions
    were removed from `<img>`; ratios remain on the existing CSS wrappers.
-   The saved `front-page` template (ID 14) had only its five image blocks and
    the hero caption repaired in place; its text, layout and templates were not
    replaced. The original content is retained in post meta
    `_adepa_content_before_image_fix_20261105` and, for the later URL-scheme
    repair, `_adepa_content_before_https_fix_20261105`.
-   The saved `siteurl` and `home` options were stored as `http://` even though
    the site is served over HTTPS. Both were corrected to
    `https://adepa-foods.local`, so generated `srcset` candidates and future
    Media Library insertions use HTTPS.
-   During verification the owner replaced the hero and first dish with Media
    Library attachments. Those images, attachment IDs and alt text were
    preserved.
-   Rendered image URLs were verified over HTTPS and return HTTP 200. The saved
    template contains five `core/image` blocks and no legacy image dimensions.

Images remain replaceable through the Site Editor Image block toolbar
(**Replace → Media Library**); no PHP, HTML or SVG editing is required.

