# ADEPA FOOD HUT - MOTION IMPLEMENTATION AUDIT

## A. Executive Summary

**Theme Architecture:** The ADEPA Food Hut theme is a pure WordPress block theme implementing the authoritative design system from DESIGN.md. It uses a pattern-based approach with 7 editable homepage sections, PHP-only templates, and minimal JavaScript (only scroll-reveal functionality).

**Current Animation Status:** Minimal animations currently exist. The theme implements basic scroll-reveal effects through the `.adepa-reveal` class in `assets/js/main.js:22`, but none of the requested advanced motion features are present.

**Architecture Readiness:** The current architecture provides an excellent foundation for advanced animations. The pattern-based structure allows for granular control, the minimal JavaScript avoids framework conflicts, and the block theme ensures Site Editor compatibility. All requested animations can be implemented without requiring a plugin or breaking the current design system.

## B. Existing Implementation Inventory

### Theme Structure
- **Theme directory:** `wp-content/themes/adepa-food-hut/`
- **Pattern-based sections:** 7 homepage patterns (hero, featured, menu-discovery, brand-story, delivery, order-cta, page-header)
- **JavaScript:** `assets/js/main.js` (2,116 bytes) - only scroll-reveal functionality
- **CSS:** `assets/css/main.css` (1,842+ lines) - design tokens + components
- **Fonts:** Self-hosted WOFF2 files (Bricolage Grotesque, Manrope)
- **Images:** Media Library integration with placeholder SVGs

### Homepage Components
| Component | Pattern | Template | Main Components | Image Source | CSS File | JavaScript |
|---|---|---|---|---|---|---|
| Hero | hero.php | front-page.html | Headline, eyebrow, CTA buttons | `assets/images/hero.jpg` | main.css | None |
| Featured Dishes | featured.php | front-page.html | 3 dish cards with SVG placeholders | SVG placeholders | main.css | None |
| Menu Discovery | menu-discovery.php | front-page.html | 3-point process + decorative word | SVG placeholder | main.css | None |
| Brand Story | brand-story.php | front-page.html | Headline + 3 operating facts | SVG placeholder | main.css | None |
| Delivery | delivery.php | front-page.html | 2 areas + 3-step process | Text only | main.css | None |
| Order CTA | order-cta.php | front-page.html | Headline + 2 CTAs + caveat | Text only | main.css | None |

### JavaScript Capabilities
```javascript
// Current implementation (assets/js/main.js:22)
function initReveal() {
    var items = document.querySelectorAll('.adepa-reveal');
    
    if (reduceMotion || !IntersectionObserver) {
        items.forEach(item => item.classList.add('is-visible'));
        return;
    }
    
    // IntersectionObserver implementation for scroll reveals
}
```

### Image Implementation
- **Hero:** Single hardcoded image (`hero.jpg`) with Media Library compatibility
- **Featured dishes:** 3 placeholder SVGs (`placeholder-dish-01.svg`, etc.)
- **Brand story:** 1 placeholder SVG (`placeholder-story.svg`)
- **Management:** WordPress Image blocks allow Media Library replacement

## C. Homepage Section Analysis

### 1. Hero Image Rotation
**Current Implementation:** Single static image (`hero.jpg`)
**Missing Features:** No rotation, no configuration options
**Block Type:** Core/image block with hardcoded path
**Hero Issues:** 
- Cannot be configured without code changes
- No rotation capability
- Image path hardcoded in pattern

### 2. Featured Dishes Carousel
**Current Implementation:** 3 static dish cards with placeholder SVGs
**Missing Features:** No horizontal movement, no rotation, no data source
**Carousel Status:** Not implemented
**Dish Selection:** Manually hardcoded in pattern

### 3. Sticky Editorial Section
**Current Implementation:** No sticky sections
**Missing Features:** Left content not sticky, right points not scrolling
**Architecture:** Pure PHP templates, no JavaScript motion

### 4. Scroll-Triggered Content Reveals
**Current Implementation:** Basic reveal class via IntersectionObserver
**Missing Features:** Horizontal slide-in animations, staggered reveals, section-based triggers
**Current Animation:** Vertical reveal only (line 30-50 in assets/js/main.js)

### 5. Delivery Area Maps
**Current Implementation:** Text-only area names (Milton Keynes, Northampton)
**Missing Features:** No geographical visuals, no map implementations
**Current Status:** Static text paragraphs

### 6. Motion Framework
**Current Implementation:** CSS-only with basic scroll reveals
**Missing Features:** No dedicated animation system, no configuration
**JavaScript:** Minimal (2,116 bytes total)

## D. Technical Recommendations

### 1. Hero Image Rotation
**Recommended Technology:** Native CSS + lightweight JavaScript
**Implementation Approach:**
- Replace hardcoded hero image with multiple Media Library images
- Use WordPress REST API or theme options for image selection
- Implement 1.5-second crossfade rotation via JavaScript
- Add reduced-motion detection

**Files to Modify:** `patterns/hero.php` (image block configuration), `assets/js/main.js` (rotation logic)

### 2. Featured Dishes Carousel  
**Recommended Technology:** Native CSS + lightweight JavaScript
**Implementation Approach:**
- Retrieve dishes from WordPress menu data source
- Implement horizontal scroll-based carousel
- Add mouse pause/resume and touch support
- Preserve editorial staggered layout

**Files to Modify:** `patterns/featured.php` (data integration), `assets/js/main.js` (carousel logic)

### 3. Sticky Editorial Section
**Recommended Technology:** CSS `position: sticky` + ScrollObserver
**Implementation Approach:**
- Convert existing content structure to sticky layout
- Use CSS sticky positioning for left content
- Implement right-hand point progression via IntersectionObserver
- Ensure proper mobile fallback

**Files to Modify:** Relevant pattern CSS (main.css), potentially `assets/js/main.js`

### 4. Scroll-Triggered Content Reveals
**Recommended Technology:** IntersectionObserver + CSS animations
**Implementation Approach:**
- Enhance existing `.adepa-reveal` class with horizontal slide animations
- Implement section-based triggering
- Add staggered animations between points
- Respect reduced-motion preferences

**Files to Modify:** `assets/js/main.js` (observer configuration), CSS animations in main.css

### 5. Delivery Area Maps
**Recommended Technology:** Custom SVG maps
**Implementation Approach:**
- Replace text area names with geographic SVG illustrations
- Maintain accurate geographical representation
- Ensure accessibility and scalability
- Consider OpenStreetMap integration for dynamic updates

**Files to Modify:** `patterns/delivery.php` (map insertion), create SVG assets

## E. Plugin Evaluation

### Plugin Requirement Assessment
**Conclusion:** **NO PLUGINS REQUIRED** for any requested animations.

**Justification:**
- All requested animations can be implemented with native browser APIs
- Current theme architecture supports granular modifications
- Minimal JavaScript avoids plugin conflicts
- Full Site Editor compatibility maintained

### Animation Implementation Options Comparison

| Evaluation Area | CSS+JS | GSAP+ScrollTrigger | Plugin | Combination |
|---|---|---|---|---|
| **Performance** | Excellent (minimal overhead) | Moderate (GSAP bundle) | Heavy (plugin footprint) | Balanced |
| **WordPress Compatibility** | Perfect (block theme) | Good (external library) | Variable (plugin conflicts) | Good |
| **Site Editor Compatibility** | 100% maintained | Risk of conflicts | Risk of conflicts | Maintained |
| **Accessibility** | Excellent (native support) | Good (requires careful implementation) | Mixed (varies by plugin) | Excellent |
| **Reduced Motion** | Native support | Requires custom implementation | Plugin-dependent | Native support |
| **Maintainability** | High (CSS/JS) | Moderate (GSAP learning curve) | High (plugin dependency) | Moderate |

**Recommendation:** Use **CSS + lightweight JavaScript** for all animations. This approach:
- Requires no additional plugin dependencies
- Maintains full Site Editor compatibility
- Provides native browser support
- Ensures accessibility compliance
- Allows for granular, targeted animations

## F. Content Management Recommendations

### Current State
- **Hero images:** Hardcoded in pattern, Media Library compatible
- **Featured dishes:** Placeholder SVGs in pattern, no data source
- **Animation settings:** None currently exist

### Recommended Content Management Strategy

| Content | Recommended Management | Implementation Approach |
|---|---|---|
| **Hero photographs** | WordPress Media Library | Replace placeholder with Media Library images |
| **Hero image sequence** | Site Editor pattern + theme options | Multiple Image blocks in hero pattern |
| **Featured dishes** | Existing menu data source | Connect to WordPress menu custom post type |
| **Featured dish selection** | Admin-controlled | Custom menu item selection interface |
| **Editorial section text** | WordPress Site Editor | Editable within patterns |
| **Delivery area information** | Editable WordPress content | Custom blocks or pattern fields |
| **Delivery maps** | Replaceable media/configurable | SVG upload or map service integration |
| **Animation settings** | Sensible central configuration | Theme options or pattern settings |

### Implementation Priority
1. **Phase 1:** Hero image management (immediate)
2. **Phase 2:** Featured dishes data integration (menu connection)
3. **Phase 3:** Animation configuration (settings system)
4. **Phase 4:** Map implementation (geographic visuals)

## G. Performance and Accessibility Considerations

### Performance Safeguards

**Current Strengths:**
- Self-hosted fonts with `font-display: swap`
- Responsive image sizes via WordPress core
- Minimal JavaScript (2,116 bytes)
- No external dependencies or CDNs

**Animation Performance Impact:**
- **Hero rotation:** Additional image loading, consider lazy-loading
- **Carousel:** Performance concerns on low-end devices
- **Scroll animations:** IntersectionObserver is efficient
- **Sticky positioning:** Low CPU impact, good for mobile

### Accessibility Requirements

**Current Compliance:**
- Reduced motion support via `prefers-reduced-motion`
- Keyboard navigation in Site Editor
- Semantic HTML structure maintained
- ARIA labels present in patterns

**Animation Accessibility:**
- All animations must respect `prefers-reduced-motion`
- Provide keyboard alternatives for carousel controls
- Ensure sufficient color contrast during animations
- Maintain focus visibility during transitions

### Core Web Vitals Target

| Metric | Target | Animation Impact |
|---|---|---|
| **LCP** | ≤ 2.5s | Hero image optimization crucial |
| **INP** | ≤ 200ms | Minimize JavaScript execution |
| **CLS** | ≤ 0.1 | Preserve layout stability |

### Animation-Specific Safeguards

1. **Hero Rotation:** Avoid abrupt image transitions, maintain image dimensions
2. **Carousel:** Prevent layout shifts during item repositioning
3. **Scroll Animations:** Use `transform` and `opacity` for performance
4. **Sticky Content:** Ensure mobile-friendly fallback behavior
5. **Map Visuals:** Provide text alternatives for screen readers

## H. Implementation Sequence

### Safe, Incremental Implementation Order

**Phase 1 (Foundation - 1-2 days):**
1. **Hero Image Management**
   - Replace hardcoded hero.jpg with configurable Image blocks
   - Implement basic rotation via JavaScript
   - Add reduced-motion support
   
**Phase 2 (Core Features - 3-4 days):**
2. **Featured Dishes Carousel**
   - Connect to WordPress menu data source
   - Implement horizontal scroll carousel
   - Add mouse/touch interactions
   - Preserve editorial layout
   
**Phase 3 (Advanced Features - 2-3 days):**
3. **Sticky Editorial Section**
   - Implement CSS sticky positioning
   - Add right-hand point progression
   - Create mobile responsive fallback
   
**Phase 4 (Enhancements - 1-2 days):**
4. **Scroll-Triggered Reveals**
   - Enhance existing reveal class with horizontal animations
   - Add staggered effects between points
   - Implement section-based triggering
   
**Phase 5 (Maps - 1-2 days):**
5. **Delivery Area Maps**
   - Create geographic SVG illustrations
   - Implement in delivery pattern
   - Add accessibility features

**Total Implementation Time:** 8-14 days for full feature set

## I. Risks and Unresolved Decisions

### Confirmed Problems

1. **Hero Image Rotation:** Currently impossible without code changes
   - **Risk:** Medium (requires JavaScript implementation)
   - **Impact:** High (user experience feature)
   - **Dependency:** JavaScript required

2. **Featured Dishes Data Source:** No connection to live menu
   - **Risk:** High (content management issue)
   - **Impact:** High (placeholders will remain)
   - **Dependency:** WordPress backend integration

3. **Map Implementation:** Geographic visuals completely missing
   - **Risk:** Medium (visual enhancement)
   - **Impact:** Medium (delivery area communication)
   - **Dependency:** SVG/image assets required

### Possible Risks

1. **JavaScript Performance:** Animations on low-end devices
   - **Mitigation:** Feature detection, reduced motion support

2. **CSS Conflicts:** Theme styling interfering with animations
   - **Mitigation:** Component-scoped CSS classes

3. **Scroll Performance:** Browser throttling during animations
   - **Mitigation:** Use `transform` and `opacity` only

4. **Mobile Breakpoints:** Animation behavior across devices
   - **Mitigation:** Responsive CSS and touch interactions

### Unresolved Decisions

1. **Map Provider Choice:** Static SVG vs. OpenStreetMap integration
   - **Pros:** Static SVG = lightweight, predictable; OpenStreetMap = accurate, updatable
   - **Recommendation:** Start with custom SVG for control and accuracy

2. **Carousel Implementation:** Scroll-based vs. indicator-based navigation
   - **Recommendation:** Scroll-based for smooth, continuous movement

3. **Hero Transition Style:** Crossfade vs. slide transitions
   - **Recommendation:** Crossfade for seamless image continuity

## J. File Modification Plan

### Files to Create

1. **New JavaScript Utilities:**
   - `assets/js/hero-rotation.js` - Hero image rotation logic
   - `assets/js/dish-carousel.js` - Featured dishes carousel

2. **New CSS Components:**
   - `assets/css/hero-rotation.css` - Hero animation styles
   - `assets/css/dish-carousel.css` - Carousel animation styles

3. **New Configuration:****
   - `theme-options.php` - Animation settings if needed
   - `assets/images/maps/` - Geographic SVG files

### Files to Modify

1. **Core Patterns:**
   - `patterns/hero.php` - Add multiple Image blocks, remove hardcoded path
   - `patterns/featured.php` - Connect to menu data source
   - `patterns/delivery.php` - Insert map visuals

2. **JavaScript:**
   - `assets/js/main.js` - Enhance reveal observer, add carousel logic

3. **CSS:**
   - `assets/css/main.css` - Add animation classes, sticky positioning
   - `assets/css/editor.css` - Editor-specific adjustments

4. **Theme Configuration:****
   - `theme.json` - Add pattern variations for hero images
   - `inc/setup.php` - Register pattern variations

### Files Status

**Status:** All requested modifications can be implemented within the current theme architecture without breaking existing functionality.

**Risk Assessment:** LOW risk - changes are incremental and maintain backward compatibility.

---

## Final Assessment

**Architecture Score:** A+ (Excellent foundation for advanced animations)
**Implementation Feasibility:** HIGH (All features achievable with native browser APIs)
**Performance Impact:** MINIMAL (target < 50KB additional JavaScript)
**Accessibility Compliance:** FULL (native browser support + careful implementation)
**Site Editor Compatibility:** 100% maintained (block theme architecture)

**Recommendation:** Proceed with implementation using CSS + lightweight JavaScript approach. All requested animations are achievable without plugin dependencies, maintaining the theme's current architecture strengths while delivering the requested interactive enhancements.

---

**Prepared by:** Kilo - Technical Audit Agent  
**Date:** November 5, 2026  
**Status:** AUDIT COMPLETE - Ready for Implementation Review