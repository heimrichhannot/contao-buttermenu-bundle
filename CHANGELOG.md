# Changelog
All notable changes to this project will be documented in this file.

## [2.1.0] - 2022-04-28
- Changed: encore entry is now added automatically
- Changed: minimum contao version is now 4.9
- Changed: minimum php version is now 7.4

## [2.0.0] - 2022-04-27
- Changed: removed test setup
- Changed: renamed bundle class (**BREAKING!**)
- Changed: updated encore bundle integration
- Changed: updated dependencies
- Changed: allow php 8

## [1.3.1] - 2019-05-15

### Added
- License  

### Changed
- update dependency

## [1.3.0] - 2019-04-30

### Fixed
- compact mode previous button link title

### Changed
- `data-bm-compact-show-current` added as data attribute (default: false), in compact mode the active submenu is now no longer the active menu 

## [1.2.7] - 2019-04-30

### Fixed
- missing argument in default template
- syntax error in default template

## [1.2.6] - 2019-04-25

### Fixed
- w3c validator error

## [1.2.5] - 2019-04-12

### Fixed
- accessibility support fixed, dropdownRoots are now buttons (toggle dropdown on focus with enter/space and tab through dropdown if toggled)

## [1.2.4] - 2019-01-22

### Fixed
- added `aria-current="page"` to active links

## [1.2.3] - 2019-01-22

### Fixed
- added `aria-current="page"` to active links

## [1.2.2] - 2019-01-22

### Fixed
- aria support: use aria-label on nested menu that refers to parent id

## [1.2.1] - 2019-01-21

### Fixed
- added more specific back link title using aria-label

## [1.2.0] - 2019-01-21

### Added
- keyboard navigation in compact mode

## [1.1.0] - 2018-11-19

### Added
- flex column wrap support with data attributes `data-bm-column-min`, `data-bm-columns`

## [1.0.3] - 2018-11-15

### Fixed
- `tabindex` for second level (must be -1)

## [1.0.2] - 2018-11-05

### Fixed
- `encore-bundle` dependency changed to `0.*`

## [1.0.1] - 2018-10-24

### Fixed
- `composer.json` typo for `contao-manager-plugin`

## [1.0.0] - 2018-10-24

### Added
- initial version
