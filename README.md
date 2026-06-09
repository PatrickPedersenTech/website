# patrickpedersen.tech

Personal portfolio site for Patrick Pedersen — Datatechnician specializing in Infrastructure & DevOps.

Built with [Eleventy](https://www.11ty.dev/) and hosted on [Cloudflare Pages](https://pages.cloudflare.com/).

---

## Stack

| Layer | Technology |
|---|---|
| Static site generator | Eleventy 3.x (Nunjucks templates) |
| Hosting | Cloudflare Pages |
| DNS & security | Cloudflare (Full Strict SSL, bot protection) |
| Styling | Vanilla CSS with CSS custom properties |
| JavaScript | Vanilla JS — no frameworks |

---

## Project structure

```
.
├── .eleventy.js          # Build config and custom filters
├── package.json
├── wrangler.jsonc        # Cloudflare Workers/Pages config
│
├── _data/               # Content — edit these to update the site
│   ├── skills.json
│   ├── experience.json
│   ├── education.json
│   └── projects.json
│
├── _includes/           # Shared templates
│   ├── base.njk         # Layout — head, nav, footer, scripts
│   ├── skill-card.njk   # Skill card partial
│   └── timeline-item.njk # Timeline entry partial
│
├── assets/
│   ├── css/
│   │   ├── style.css    # Shared design tokens and global styles
│   │   ├── index.css    # Home page styles
│   │   ├── allskills.css # Skills page styles
│   │   └── cv.css       # CV page styles and print styles
│   ├── js/
│   │   ├── lang.js      # EN/DA language toggle
│   │   ├── nav.js       # Scroll-aware nav highlighting + hamburger
│   │   └── skills-filter.js # Skills filter and search
│   └── img/             # Skill icons (SVG/PNG)
│
├── index.njk            # Home page
├── allskills.njk        # Full filterable skills page
├── cv.njk               # CV / resume page
└── 404.njk              # 404 error page
```

---

## Getting started

### Prerequisites

- Node.js 18 or later
- npm

### Install

```bash
npm install
```

### Development

```bash
npm start
```

Starts a local dev server at `http://localhost:8080` with live reload.

### Build

```bash
npm run build
```

Outputs the static site to `_site/`.

---

## Updating content

All site content lives in `_data/`. No template changes needed for routine updates.

### Adding a skill

Add an entry to `_data/skills.json`:

```json
{ "name": "Tool Name", "img": "toolname-color.svg", "category": "tools" }
```

Categories: `languages` · `tools` · `platforms` · `monitoring`

Place the icon in `assets/img/`.

### Adding a project

Add an entry to `_data/projects.json`:

```json
{
  "category": "infrastructure",
  "icon": "🔧",
  "title": "Project title",
  "description": "Short description shown on the home page card.",
  "cv_description": "Longer description shown on the CV page.",
  "cv_bullets": [
    "Specific contribution or detail",
    "Another bullet point"
  ],
  "chips": ["Terraform", "Azure"],
  "link": "https://github.com/...",
  "collab": false
}
```

- Set `"link": null` for private or internal repos
- Set `"collab": true` to show the collaborative badge
- `cv_description` and `cv_bullets` are optional — falls back to `description` if absent

### Updating experience or education

Edit `_data/experience.json` or `_data/education.json`. Both support:

- `description` — shown on the index page timeline
- `cv_bullets` — bullet list shown on the CV page only
- `chips` — technology tags shown on the CV

---

## Deployment

The site deploys automatically via Cloudflare Pages on every push to the production branch.

**Build settings:**

| Setting | Value |
|---|---|
| Build command | `npm run build` |
| Build output directory | `_site` |
| Node.js version | 22 |

---

## License

This project is not open source. The code and content are personal and not intended for reuse.