# Mail Layouts - Theme Sixteen

Questa directory contiene i layout HTML per le email del tema Sixteen. I layout sono utilizzati dal sistema di email templates di Spatie tramite la classe `SpatieEmail`.

## 📁 Struttura Directory

```
mail-layouts/
├── README.md           # Questo file
├── base.html          # Layout base standard
└── christmas.html     # Layout tematico natalizio
```

## 🎨 Layout Disponibili

### 1. base.html - Layout Standard

**Quando usare**: Email transazionali, notifiche, comunicazioni standard

**Caratteristiche**:
- Design Italia Color System (Blu #0066CC, Verde #00AA66)
- Font: Titillium Web (font ufficiale PA italiana)
- Dark mode support
- Responsive design
- Accessibilità WCAG 2.1

**Variabili Mustache disponibili**:
- `{{ subject }}` - Oggetto email
- `{{ preheader_text }}` - Testo preview
- `{{ logo_header }}` - URL logo
- `{{ logo_header_base64 }}` - Logo in base64
- `{{ logo_svg }}` - Logo SVG
- `{{ company_name }}` - Nome azienda
- `{{ company_address }}` - Indirizzo azienda
- `{{ site_url }}` - URL sito web
- `{{ unsubscribe_url }}` - URL disiscrizione
- `{{ facebook_url }}` - Link Facebook
- `{{ twitter_url }}` - Link Twitter
- `{{ linkedin_url }}` - Link LinkedIn
- `{{ year }}` - Anno corrente
- `{{{ body }}}` - Contenuto dinamico (triple braces = unescaped HTML)

### 2. christmas.html - Layout Natalizio

**Quando usare**: Comunicazioni durante periodo natalizio (Dicembre-Gennaio)

**Caratteristiche**:
- ❄️ **Neve animata** con CSS animations (10 fiocchi di neve)
- ⭐ **Stelle brillanti** con effetto twinkle
- 🎄 **Luci natalizie** animate nel bordo superiore/inferiore
- 🎅 **Colori tema Natale**: Rosso #C41E3A, Verde #165B33, Oro #FFD700
- **Font serif** (Georgia) per eleganza natalizia
- **Box evidenziato** per messaggio chiusura ufficio
- **Emoji festive**: 🎄 🎅 ⛄ 🎁 ✨ 🌟 ❄️ ❅
- Responsive (nasconde animazioni su mobile per performance)
- Compatible con client email (solo CSS, no JavaScript)

**Messaggio predefinito**:
```
🎄 Buone Feste! 🎄
Lo Studio resterà chiuso
dal 24 Dicembre al 7 Gennaio
Ci vediamo nel 2026!
```

**Note tecniche**:
- Le animazioni CSS sono **email-safe** (supportate da Apple Mail, Gmail web)
- Fallback automatico per client che non supportano @keyframes (Outlook)
- Background scuro con neve per atmosfera invernale
- Performance ottimizzata: 10 snowflakes (non eccessive)

## 🔧 Come Utilizzare i Layout

### Metodo 1: Modificare SpatieEmail.php (Globale)

Cambiare il layout per TUTTE le email modificando il metodo `getHtmlLayout()`:

```php
// File: Modules/Notify/app/Emails/SpatieEmail.php

public function getHtmlLayout(): string
{
    $xot = XotData::make();
    $pub_theme = $xot->pub_theme;
    $pubThemePath = base_path('Themes/'.$pub_theme);

    // Layout standard (default)
    $pathToLayout = $pubThemePath.'/resources/mail-layouts/base.html';

    // Layout natalizio (periodo festivo)
    // $pathToLayout = $pubThemePath.'/resources/mail-layouts/christmas.html';

    return file_get_contents($pathToLayout);
}
```

### Metodo 2: Layout Dinamico Basato su Data

Scegliere automaticamente il layout in base alla data:

```php
public function getHtmlLayout(): string
{
    $xot = XotData::make();
    $pub_theme = $xot->pub_theme;
    $pubThemePath = base_path('Themes/'.$pub_theme);

    // Periodo natalizio: 1 Dicembre - 10 Gennaio
    $currentMonth = now()->month;
    $currentDay = now()->day;

    $isChristmasSeason = (
        ($currentMonth === 12 && $currentDay >= 1) ||
        ($currentMonth === 1 && $currentDay <= 10)
    );

    $layoutFile = $isChristmasSeason ? 'christmas.html' : 'base.html';
    $pathToLayout = $pubThemePath.'/resources/mail-layouts/'.$layoutFile;

    return file_get_contents($pathToLayout);
}
```

### Metodo 3: Layout Personalizzato per Template Specifici

Estendere `SpatieEmail` per template specifici:

```php
namespace Modules\Notify\Emails;

class ChristmasEmail extends SpatieEmail
{
    public function getHtmlLayout(): string
    {
        $xot = XotData::make();
        $pub_theme = $xot->pub_theme;
        $pubThemePath = base_path('Themes/'.$pub_theme);

        return file_get_contents(
            $pubThemePath.'/resources/mail-layouts/christmas.html'
        );
    }
}
```

## 🎯 Best Practices

### 1. Quando Usare Layout Tematici

✅ **SÌ**:
- Email marketing stagionali
- Newsletter festive
- Comunicazioni di chiusura ufficio
- Auguri ufficiali

❌ **NO**:
- Email transazionali critiche (reset password, conferme ordini)
- Notifiche di sistema
- Alert e warning

### 2. Compatibilità Email Clients

**Supporto Animazioni CSS**:
- ✅ **Ottimo**: Apple Mail, iOS Mail, macOS Mail
- ✅ **Buono**: Gmail (web), Outlook.com, Yahoo Mail
- ⚠️ **Limitato**: Outlook 2016-2021 (usa Word rendering - ignora animazioni)
- ✅ **Accettabile**: Thunderbird, Altri client moderni

**Fallback Graceful**: I client che non supportano animazioni mostrano semplicemente contenuto statico.

### 3. Performance

- **Dimensione file**: ~25KB (christmas.html) vs ~20KB (base.html)
- **Rendering**: Identico su client che ignorano CSS animations
- **Mobile**: Animazioni disabilitate automaticamente (media query)

### 4. Accessibilità

Entrambi i layout includono:
- `role="presentation"` su tabelle di layout
- `aria-hidden="true"` su elementi decorativi
- `.sr-only` per screen reader
- Alt text su immagini
- Contrasto colori WCAG AA compliant

## 📊 Testing

### Test Checklist

Prima di utilizzare un layout in produzione:

- [ ] Test su Apple Mail (macOS/iOS)
- [ ] Test su Gmail (web, Android, iOS)
- [ ] Test su Outlook (2016, 2019, 365, web)
- [ ] Test su mobile (viewport <600px)
- [ ] Test dark mode (se supportato)
- [ ] Test su client con CSS disabilitato
- [ ] Validazione HTML (https://validator.w3.org/)
- [ ] Test accessibilità (screen reader)

### Strumenti Consigliati

- **Litmus**: https://litmus.com/ (test multi-client)
- **Email on Acid**: https://www.emailonacid.com/
- **Preview locale**:
  ```bash
  # Creare un MailTemplate di test e visualizzarlo
  php artisan make:mail-template test-christmas --layout=christmas
  ```

## 🎨 Creare Nuovi Layout Tematici

### Template Base

```html
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ subject }}</title>

    <style>
        /* Reset CSS obbligatorio */
        body, table, td { -webkit-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { border: 0; display: block; }

        /* Il tuo tema qui */
    </style>
</head>
<body>
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <!-- Header con logo -->

                <!-- Contenuto -->
                {{{ body }}}

                <!-- Footer -->
            </td>
        </tr>
    </table>
</body>
</html>
```

### Regole Obbligatorie

1. **Tabelle per layout** (non div) - compatibilità Outlook
2. **CSS inline** quando possibile
3. **Reset CSS** per normalizzare rendering
4. **`{{{ body }}}`** (triple braces) per contenuto HTML non escaped
5. **Responsive** con media queries `@media screen and (max-width: 600px)`
6. **Width="600"** massimo per email (standard de facto)
7. **Variabili Mustache** per contenuti dinamici

## 📚 Risorse Utili

- **Spatie Mail Templates**: https://github.com/spatie/laravel-database-mail-templates
- **Email Design Guide**: https://www.campaignmonitor.com/css/
- **Mustache Syntax**: https://mustache.github.io/mustache.5.html
- **Can I Email**: https://www.caniemail.com/ (CSS support in email)

## 🐛 Troubleshooting

### Problema: Animazioni non visibili in Outlook

**Causa**: Outlook 2016-2021 usa Word rendering engine (no CSS animations)

**Soluzione**: Normale - il layout degrada gracefully a statico

### Problema: Immagini non caricate

**Causa**: Client email blocca immagini esterne di default

**Soluzione**: Usa `logo_header_base64` per embed base64 o SVG inline

### Problema: Layout rotto su mobile

**Causa**: Media queries non applicate o width fissi

**Soluzione**:
```css
@media screen and (max-width: 600px) {
    .email-container { width: 100% !important; }
}
```

### Problema: Variabili Mustache non sostituite

**Causa**: Sintassi errata o variabile non passata a SpatieEmail

**Soluzione**: Verifica syntax `{{ variable }}` e che sia in `$this->data`

---

## 📝 Changelog

### 2025-12-19 - Template Natalizio
- ✨ Aggiunto `christmas.html` con animazioni CSS festive
- 📚 Documentazione completa utilizzo layout
- 🎨 10 snowflakes animati con CSS @keyframes
- ⭐ Decorazioni natalizie (stelle, luci, albero)
- 📱 Ottimizzazione mobile (disabilita animazioni)
- ♿ Accessibilità completa (ARIA, sr-only)

### 2024-XX-XX - Layout Base
- 🎨 Layout base con Design Italia
- 🌓 Dark mode support
- 📱 Responsive design
- ♿ WCAG 2.1 compliant

---

**Creato con ❄️ per le festività 2025-2026**
