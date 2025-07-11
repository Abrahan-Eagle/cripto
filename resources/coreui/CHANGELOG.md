## v3.4.2
- fix(MultiSelect): typo in `DATA_KEY = 'coreui.mutli-select'`
- fix(_email.scss): text in `c-message-body` not visible in light theme
## v3.4.1
- fix(MultiSelect): undefined instead of option text
## v3.4.0
## v3.3.0
## v3.2.2
## v3.2.1
## v3.2.0
## v3.1.1
## v3.1.0
## v3.0.0
## v3.0.0-next
- chore: Move the browserslist config to a separate file.
- chore add `bundlesize`
- chore add `find-unused-sass-variables`
- chore: update `bootstrap` to `4.2.1`
- chore: update `@babel/cli` to `7.2.0`
- chore: update `@babel/core` to `7.2.0`
- chore: update `@babel/plugin-external-helpers` to `7.2.0`
- chore: update `@babel/plugin-proposal-object-rest-spread` to `7.2.0`
- chore: update `@babel/plugin-proposal-throw-expressions` to `7.2.0`
- chore: update `@babel/plugin-transform-runtime` to `7.2.0`
- chore: update `@babel/preset-env` to `7.2.0`
- chore: update `autoprefixer` to `9.4.2`
- chore: update `eslint` to `5.10.0`
- chore: update `node-sass` to `4.11.0`
- chore: update `nodemon` to `1.18.8`
- chore: update `rollup` to `0.67.4`
- chore: update `rollup-plugin-babel` to `4.1.0`
- chore: update `rollup-plugin-node-resolve` to `4.0.0`
- chore: update `stylelint` to `9.9.0`
- chore: update `stylelint-order` to `2.0.0`
- chore: update `stylelint-scss` to `3.4.2`

## v2.1.3
- chore: update `nodemon` to `1.18.7` (remove vulnerability)

## v2.1.2
- fix: devDependencies security issues (event-stream, flatmap-stream)
- chore: dependencies update
  - update `npm-run-all` to `^4.1.5`
  - reinstall `nodemon`
  ```bash
  npm uninstall nodemon
  npm install --save-dev nodemon
  ```

## v2.1.1
- fix(sidebar): `url("data:,")` turns into `url("'data:,'")`  
  now replaced with Base64 Encode of 1x1px Transparent gif, closes #49
  1. `ie11` ignores `list-style:none` (ie11 rtl sidebar minimized issue)
  2. `url("data:,")` turns into `url("'data:,'")` after minification
  3. angular 7 cli build complains on `url("'data:,'")`
- chore: update `@babel/cli` to `7.1.5`
- chore: update `stylelint` to `9.8.0`
- chore: update `stylelint-scss` to `3.4.0`
- chore: update `shelljs` to `0.8.3`
- chore: update `@babel/preset-env` to `7.1.6`
- chore: update `@babel/core` to `7.1.6`
- chore: update `eslint` to `5.9.0`
- chore: update `rollup` to `0.67.3`

## v2.1.0
- feat(scss): sidebar-nav-link-disabled
- chore: update `nodemon` to `1.18.6`

## v2.0.26
- fix(.sidebar-minimizer): add `cursor: pointer`
- feat: delegated event handlers to support turbolinks (sidebar, aside-menu)- thanks @RyanVasichko
- chore: update `node-sass` to `4.10.0`
- chore: update `rollup` to `0.67.0`

## v2.0.25
- fix(buttons.scss): remove `button { @extend .btn; }`

## v2.0.24
- fix(build): add missing `commonjs` for utilities
- chore: add `@babel/polyfill`
- fix(ie): add `NodeList` `forEach` polyfill
- fix(sidebar): add `dataset.toggle` ie10 fix  
- fix(aside-menu): add `dataset.toggle` ie10 fix
- chore(build): add `rollup-plugin-commonjs`

## v2.0.23
_broken build, do not use_

## v2.0.22
- fix(buttons.scss): wrong cursor for disabled state
- chore: update `eslint` to `5.8.0`
- chore: update `nodemon` to `1.18.5`
- chore: update `stylelint` to `9.7.1`

## v2.0.21
- feat(sidebar): mobile clickout behaviour
- chore: update `@babel/plugin-external-helpers` to `7.0.0`
- chore: update `autoprefixer` to `9.3.1`
- chore: update `postcss-cli` to `6.0.1`
- chore: update `stylelint-scss` to `3.3.2`

## v2.0.20
- fix(layout): sidebar on mobile issue [#23](https://github.com/coreui/coreui-angular/issues/23)
- fix: sidebar, sidebar-minimizer `rtl` ie issues, tweaks
- refactor(sidebar.js): ps minor cleanup
- chore: update `autoprefixer` to `9.2.1`

## v2.0.19
- refactor: extract getCssCustomProperties function
- feat: add getColor function
- feat: sidebar set active using query string PR #21
- chore: update `node-sass` to `4.9.4`
- chore: update `eslint` to `5.7.0`
- chore: update `babel-plugin-istanbul` to `5.1.0`
- chore: update `semver` to `5.6.0`
- chore: update `autoprefixer` to `9.2.0`

## v2.0.18
- feat: add deep objects merge utility
- chore: build rollup utilities script cleanup
- fix(rgbToHex): transparent is not a valid rgb color ie issue

## v2.0.17
- fix(card): `rtl` for `card-header` icon margins
- fix(sidebar): `rtl` for `sidebar-minimizer` icon
- chore: update `rollup` to `0.66.6`
- thanks @MrDevIr

## v2.0.16
- fix(breadcrumb): `rtl` padding  
- fix(card): `rtl` float for `card-header-actions`
- fix(sidebar): `rtl` ps scrollbar issue temp fix/refactor
- chore: update `rollup` to `0.66.5`

## v2.0.15
- feat(sidebar): `badge` margins for `nav-dropdown-toggle`
- chore: update `eslint-plugin-compat` to `2.6.2`
- chore: update `rollup` to `0.66.4`

## v2.0.14
- fix(scss): add missing `light-blue` color variable

## v2.0.13
- chore: update `@babel/core` to `7.1.2`
- chore: update `@babel/cli` to `7.1.2`
- chore: update `eslint` to `5.6.1`

## v2.0.12
- fix(layout) `aside` IE issue with `.main` margin on mobile
- fix(sidebar) `rtl` IE issue with `sidebar-minimized` captions
- fix(sidebar) `rtl` ps scrollbar issue temp fix

## v2.0.11
- fix(layout) `sidebar-fixed` IE issue with `.main` margin on mobile
- fix(sidebar) `sidebar-toggler` issue for `rtl`
- chore: update `babel-eslint` to `10.0.1`
- chore: update `stylelint` to `9.6.0`

## v2.0.10
- fix(_layout.scss) `navbar-brand` top position IE issue
- chore: update `babel-eslint` to `10.0.0`

## v2.0.9
- fix(sidebar) remove scrollbar when `sidebar-minimized`
- refactor(sidebar) extract `makeScrollbar()` and `destroyScrollbar()`
- chore: update `@babel/cli` to `7.1.0`
- chore: update `@babel/core` to `7.1.0`
- chore: update `@babel/plugin-transform-runtime` to `7.1.0`
- chore: update `@babel/preset-env` to `7.1.0`
- chore: update `copyfiles` to `2.1.0`
- chore: update `eslint` to `5.6.0`
- chore: update `rollup` to `0.66.2`
- chore: update `stylelint-scss` to `3.3.1`

## v2.0.8
- fix(sidebar) minimizing sidebar with bottom chevron does not allow to maximize it again #404
- fix(sidebar) show scrollbar after height change #419

## v2.0.6
- fix(sidebar) static mobile sidebar not dismissed on link click

## v2.0.5
- fix(sidebar) mobile sidebar not dismissed on link click #409
- chore: update `bootstrap` to `4.1.3`
- chore: update `@babel/cli` to `7.0.0`
- chore: update `@babel/core` to `7.0.0`
- chore: update `@babel/plugin-proposal-object-rest-spread` to `7.0.0`
- chore: update `@babel/plugin-proposal-throw-expressions` to `7.0.0`
- chore: update `@babel/plugin-transform-runtime` to `7.0.0`
- chore: update `@babel/preset-env` to `7.0.0`
- chore: update `autoprefixer` to `9.1.5`
- chore: update `babel-eslint` to `9.0.0`
- chore: update `babel-plugin-istanbul` to `5.0.1`
- chore: update `clean-css-cli` to `4.2.1`
- chore: update `eslint` to `5.5.0`
- chore: update `eslint-plugin-compat` to `2.5.1`
- chore: update `node-sass` to `4.9.3`
- chore: update `nodemon` to `1.18.4`
- chore: update `postcss-cli` to `6.0.0`
- chore: update `rollup` to `0.65.0`
- chore: update `rollup-plugin-babel` to `4.0.3`
- chore: update `rollup-plugin-node-resolve` to `3.4.0`
- chore: update `semver` to `5.5.1`
- chore: update `stylelint` to `9.5.0`
- chore: update `stylelint-order` to `1.0.0`
- chore: update `stylelint-scss` to `3.3.0`
- chore: update `uglify-js` to `3.4.9`

## v2.0.4
- **Refactor: SCSS Variables**
- Update: @babel/cli to 7.0.0-beta.53
- Update: @babel/core to 7.0.0-beta.53
- Update: @babel/plugin-proposal-object-rest-spread to 7.0.0-beta.53
- Update: @babel/plugin-proposal-throw-expressions to 7.0.0-beta.53
- Update: @babel/plugin-transform-runtime to 7.0.0-beta.53
- Update: @babel/preset-env to 7.0.0-beta.53
- Update: autoprefixer to 8.6.5
- Update: babel-eslint to 8.2.6
- Update: bootstrap to 4.1.2
- Update: cross-env to 5.2.0
- Update: eslint to 5.1.0
- Update: eslint-plugin-compat to 2.5.0
- Update: node-sass to 4.9.2
- Update: nodemon to 1.18.1
- Update: postcss-cli to 5.0.1
- Update: rollup to 0.62.0
- Update: rollup-plugin-babel to 3.0.7
- Update: shx to 0.3.2
- Update: stylelint to 9.3.0
- Update: stylelint-scss to 3.1.3
- Update: uglify-js to 3.4.4
