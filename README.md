# Butter menu 

A smooth animated navigation menu for contao with hover dropdown (big screens for instance) and off-canvas (mobile for instance) modes. 

## Technical Instructions

- Attach the butter menu to your `navigation` front end module by using the `nav_buttermenu_default` template.
- Enable `contao-buttermenu-bundle` as `active entry` at the `page setting` (Encore Fieldset)
- Add `@import "~contao-buttermenu/scss/_buttermenu";` to your project scss file and adjust variables before if required


## Styling

By default no styles are generated, set `$bm-menu-generate-classes` to `true` to style butter menu with defaults, otherwise use the provided mixins as stated below.

Required mixins for the default mode (include inside your media queries):

```
@include media-breakpoint-up(md) {
	@include bm-default(theme-color('primary'));
}
```

Required mixins for the compact off-canvas mode (include this inside your media queries):

```
// .header_compact.scss
@include media-breakpoint-down(sm) {
	@include bm-compact-basics();
	@include bm-compact-backdrop();
	@include bm-compact-default(theme-color('primary'));
}
```



### Using the compact off-canvas mode

If you have `data-bm-compact-mode` set to `off-canvas` on your `nav_buttermenu_default` template, you will need an canvas wrapper and for sure an burger menu.
The example below shows how it can work:

```
<div class="header-static">
	<a href="/" class="header-brand">
		<img src="logo.png" alt="logo"
	</a>
	<button class="hamburger hamburger--spin" type="button" data-bm-compact-toggle=".bm-compact-canvas" aria-controls=".header-collapse" aria-expanded="false">
	  <span class="hamburger-box">
	    <span class="hamburger-inner"></span>
	  </span>
	</button>
</div>
<div class="header-collapse bm-compact-canvas" aria-hidden="false">
	<div class="header-language">
		<!-- Optional: Change language module can be here by using {{insert_module::x}} -->
	</div>
	<div class="header-meta">
		<!-- Optional: Meta navigation can be here by using {{insert_module::x}} -->
	</div>
	<div class="header-navbar bm-compact-scroll">
		<!-- Required: Insert your Navigation menu module with attached nav_buttermenu_default here by using {{insert_module::x}} -->
	</div>
</div>
```

We recommend using animated [Hamburger icons from Jonathan Suh](https://jonsuh.com/hamburgers/). The `is-active` will be added automatically upon off-canvas menu is opened. 

### Settings

Attribute | Scope | Default | Description
------ | ---- | ------- | -----------
data-bm-parent-muted | bm-menu | `touch` | Change to `click`, `touch` or `both` to prevent click on parent dropdown links
data-bm-min-left | bm-menu | 15 | Minimum offset to left side of viewport.
data-bm-min-right | bm-menu | 15 | Minimum offset to left side of viewport.   
data-bm-compact-breakpoint | bm-menu | 768 | The viewport breakpoint width below buttermenu will work in mobile `compact` mode. 
data-bm-arrow-alignment | bm-menu | center | Change to left, right or center to align arrow with navigation text.
data-bm-compact-mode | bm-menu | off-canvas | Change to `default` for normal hover/touch dropdown-toggle, or to off-canvas for an mobile menu with burger menu.
data-bm-compact-canvas | bm-menu | null | Declare the css-selector for the canvas container e.g. `.bm-compact-canvas`
data-bm-compact-toggle | any off-canvas open/close trigger | null | Declare the off-canvas container css selector e.g. `.bm-compact-canvas` on any open/close trigger like the burger menu button.