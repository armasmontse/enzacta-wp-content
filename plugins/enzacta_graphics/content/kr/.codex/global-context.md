# ENZACTA Product Page Development Standard

## Objective

This document defines the permanent development rules for ENZACTA product pages.

Every implementation must follow these rules unless explicitly overridden by the current task specification.

---

# Source of Truth

## Content

- The Excel document inside `/docs` is always the source of truth for text.
- Never copy text from the PSD.
- If the PSD and the Excel differ, the Excel always wins.

## Design

- The PSD is the visual source of truth.
- Replicate its layout, proportions, spacing and visual hierarchy as faithfully as possible.
- Do not approximate measurements without reason.

---

# Scope

Only modify what is explicitly requested.

Never refactor unrelated code.

Never modify stable sections.

Never introduce changes outside the current implementation scope.

---

# Architecture

Preserve the current project architecture.

Do not move files.

Do not create unnecessary files.

Reuse the existing structure whenever possible.

---

# HTML

Keep semantic HTML.

Avoid unnecessary wrappers.

Reuse existing components before creating new ones.

---

# CSS

Follow the existing coding style.

Prefer reusable solutions.

Use CSS variables whenever appropriate.

Avoid duplicated rules.

---

# Naming Convention

Follow BEM methodology.

Reuse existing class names whenever possible.

New classes must remain consistent with the existing naming structure.

Avoid generic class names.

Avoid IDs unless they are functionally required.

---

# Responsive Philosophy

Desktop

Replicate the PSD as accurately as possible.

Tablet

Preserve the desktop composition whenever possible.

Reduce spacing and typography proportionally.

Only stack blocks when necessary.

Mobile

Stack content naturally by section.

Maintain visual hierarchy.

Avoid creating a different layout language.

---

# Fluid Design

Prefer clamp() whenever possible.

Avoid unnecessary media queries.

Use breakpoints only when the layout truly requires structural changes.

---

# Languages

EN and KO share the same structure.

Only language-specific content and minor spacing adjustments may differ.

---

# Performance

Avoid unnecessary DOM elements.

Do not duplicate HTML.

Keep CSS maintainable.

Minimize layout shifts.

---

# Accessibility

Preserve semantic headings.

Provide meaningful alt attributes.

Keep keyboard accessibility intact.

---

# Implementation Philosophy

Implement only what is requested.

Preserve existing functionality.

Prioritize maintainability.

Prefer extending existing patterns instead of introducing new ones.

---

# Product Page Section Architecture

All product pages follow the same logical section structure.

Use these section names consistently for:
- asset naming
- CSS organization
- implementation tasks
- documentation
- future products

01. hero
02. icons
03. info
04. health
05. instructions
06. carousel
07. faq
08. facts
09. footer

Asset naming convention:

hero_*
icons_*
info_*
health_*
instructions_*
carousel_*
faq_*
facts_*
footer_*

Every exported asset must use the section prefix before its descriptive name.

Example:

hero_cover.png
icons_prebiotics.png
info_triple_biotic_formula.png
health_nutrient_vitamin_d3.png
instructions_drink.png
carousel_slide_01.png
faq_guarantee_badge.png
facts_en.png
footer_product_box.png
