# Componenti di Accessibilità - Tema Sixteen

## Panoramica

Il tema Sixteen implementa componenti di accessibilità conformi alle linee guida AGID e WCAG 2.1 AA per garantire l'accessibilità completa dell'interfaccia utente.

## Componenti Disponibili

### 1. Toggle Component

Componente toggle per switch on/off con supporto completo per accessibilità e design AGID.

**Percorso**: `resources/views/components/ui/toggle.blade.php`

**Utilizzo**:
```blade
<x-toggle 
    name="demo_toggle"
    label="Enable notifications"
    checked="true"
/>
```

**Caratteristiche**:
- Switch on/off con animazioni fluide
- Supporto per label personalizzate
- Stati checked/unchecked
- Varianti di stile (lever-left, lever-right)
- Accessibilità completa con ARIA attributes
- Conformità AGID design system

### 2. Notifiche Component

Componente per la visualizzazione di notifiche e messaggi di sistema.

**Percorso**: `resources/views/components/ui/notifiche.blade.php`

**Utilizzo**:
```blade
<x-notifiche 
    type="success"
    title="Success!"
    message="Operation completed successfully"
/>
```

**Caratteristiche**:
- Supporto per diversi tipi (success, info, warning, danger)
- Icone personalizzabili
- Posizionamento flessibile (static, fixed, absolute)
- Auto-dismiss con timeout configurabile
- Accessibilità completa con ARIA attributes
- Conformità AGID design system

### 3. Cookiebar Component

Componente per la gestione del consenso ai cookie conforme al GDPR.

**Percorso**: `resources/views/components/ui/cookiebar.blade.php`

**Utilizzo**:
```blade
<x-cookiebar 
    title="Cookie Policy"
    message="Questo sito utilizza cookie per migliorare la tua esperienza."
    accept-text="Accetta"
    decline-text="Rifiuta"
/>
```

**Caratteristiche**:
- Conformità GDPR completa
- Meccanismo di consenso chiaro
- Link alla privacy policy
- Posizionamento flessibile (top, bottom)
- Accessibilità completa con ARIA attributes
- Conformità AGID design system

### 4. Contrast Toggle

Componente per il controllo del contrasto dell'interfaccia.

**Percorso**: `resources/views/components/accessibility/contrast-toggle.blade.php`

**Utilizzo**:
```blade
<x-pub_theme::accessibility.contrast-toggle />
```

**Caratteristiche**:
- Toggle per attivare/disattivare l'alto contrasto
- Conformità WCAG 2.1 AA
- Supporto per screen reader
- Persistenza dello stato

### 2. Font Size Controls

Componente per il controllo della dimensione del font.

**Percorso**: `resources/views/components/accessibility/font-size-controls.blade.php`

**Utilizzo**:
```blade
<x-pub_theme::accessibility.font-size-controls />
```

**Caratteristiche**:
- Controlli per aumentare/diminuire la dimensione del font
- Range di dimensioni accessibili
- Persistenza delle preferenze utente

### 3. Skip Links

Componente per i link di salto per la navigazione da tastiera.

**Percorso**: `resources/views/components/accessibility/skip-links.blade.php`

**Utilizzo**:
```blade
<x-pub_theme::accessibility.skip-links />
```

**Caratteristiche**:
- Link per saltare al contenuto principale
- Visibili solo al focus
- Navigazione da tastiera ottimizzata

### 4. Accessibility Statement

Componente per la dichiarazione di accessibilità.

**Percorso**: `resources/views/components/accessibility/accessibility-statement.blade.php`

**Utilizzo**:
```blade
<x-pub_theme::accessibility.accessibility-statement />
```

**Caratteristiche**:
- Dichiarazione di conformità WCAG
- Link alle linee guida di accessibilità
- Informazioni sui test effettuati

## Struttura Directory

```
resources/views/components/accessibility/
├── contrast-toggle.blade.php
├── font-size-controls.blade.php
├── skip-links.blade.php
└── accessibility-statement.blade.php
```

## Configurazione

I componenti di accessibilità sono configurati nel file `config/sixteen.php`:

```php
'accessibility' => [
    'skip_links' => env('SIXTEEN_SKIP_LINKS', true),
    'high_contrast' => env('SIXTEEN_HIGH_CONTRAST', false),
    'font_size_controls' => env('SIXTEEN_FONT_SIZE_CONTROLS', false),
    'keyboard_navigation' => env('SIXTEEN_KEYBOARD_NAV', true),
    'screen_reader_content' => env('SIXTEEN_SCREEN_READER', true),
],
```

## JavaScript di Supporto

I componenti di accessibilità utilizzano JavaScript per:

- Gestione dello stato del contrasto
- Controllo della dimensione del font
- Navigazione da tastiera
- Persistenza delle preferenze utente

**File**: `resources/js/accessibility.js`

## CSS di Supporto

Gli stili per l'accessibilità sono definiti in:

**File**: `resources/css/accessibility.css`

### Classi CSS Principali

```css
/* Alto contrasto */
.high-contrast {
    --bg-primary: #000000;
    --text-primary: #ffffff;
    --border-primary: #ffffff;
}

/* Font size controls */
.font-size-small { font-size: 0.875rem; }
.font-size-normal { font-size: 1rem; }
.font-size-large { font-size: 1.125rem; }
.font-size-xl { font-size: 1.25rem; }

/* Skip links */
.skip-link {
    position: absolute;
    top: -40px;
    left: 6px;
    background: #000;
    color: #fff;
    padding: 8px;
    text-decoration: none;
    z-index: 1000;
}

.skip-link:focus {
    top: 6px;
}
```

## Testing

### Test di Accessibilità

```php
// Test per contrast toggle
public function test_contrast_toggle_renders_correctly()
{
    $this->blade('<x-pub_theme::accessibility.contrast-toggle />')
        ->assertSee('Alto contrasto')
        ->assertSee('aria-label');
}

// Test per skip links
public function test_skip_links_are_present()
{
    $this->get('/')
        ->assertSee('Vai al contenuto principale')
        ->assertSee('class="skip-link"');
}
```

### Test WCAG

I componenti sono testati per:

- Contrasto colori ≥ 4.5:1
- Navigazione da tastiera completa
- Supporto screen reader
- Focus visibile
- Struttura semantica corretta

## Riferimenti

- [WCAG 2.1 Guidelines](https://www.w3.org/WAI/WCAG21/quickref/)
- [Linee Guida AGID per l'Accessibilità](https://designers.italia.it/linee-guida/accessibilita/)
- [Bootstrap Italia - Accessibilità](https://italia.github.io/bootstrap-italia/docs/accessibilita/)

---

**Ultimo aggiornamento**: Gennaio 2025  
**Versione**: 1.0.0  
**Compatibilità**: Laravel 10+, Filament 4.x, Tailwind CSS 3.x
