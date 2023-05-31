<?php header("Content-type: text/css");
$r=$_GET['r'];
$g=$_GET['g'];
$b=$_GET['b'];
?>
/*
================
Fonts
================
*/

@import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap');

/*
================
Dependencies
================
*/

/*
! tailwindcss v3.0.22 | MIT License | https://tailwindcss.com
*/

/*
1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
*/

*,
::before,
::after {
  box-sizing: border-box;
  /* 1 */
  border-width: 0;
  /* 2 */
  border-style: solid;
  /* 2 */
  border-color: #e5e7eb;
  /* 2 */
}

::before,
::after {
  --tw-content: '';
}

/*
1. Use a consistent sensible line-height in all browsers.
2. Prevent adjustments of font size after orientation changes in iOS.
3. Use a more readable tab size.
4. Use the user's configured `sans` font-family by default.
*/

html {
  line-height: 1.5;
  /* 1 */
  -webkit-text-size-adjust: 100%;
  /* 2 */
  -moz-tab-size: 4;
  /* 3 */
  -o-tab-size: 4;
     tab-size: 4;
  /* 3 */
  font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  /* 4 */
}

/*
1. Remove the margin in all browsers.
2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
*/

body {
  margin: 0;
  /* 1 */
  line-height: inherit;
  /* 2 */
}

/*
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
3. Ensure horizontal rules are visible by default.
*/

hr {
  height: 0;
  /* 1 */
  color: inherit;
  /* 2 */
  border-top-width: 1px;
  /* 3 */
}

/*
Add the correct text decoration in Chrome, Edge, and Safari.
*/

abbr:where([title]) {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
}

/*
Remove the default font size and weight for headings.
*/

h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: inherit;
  font-weight: inherit;
}

/*
Reset links to optimize for opt-in styling instead of opt-out.
*/

a {
  color: inherit;
  text-decoration: inherit;
}

/*
Add the correct font weight in Edge and Safari.
*/

b,
strong {
  font-weight: bolder;
}

/*
1. Use the user's configured `mono` font family by default.
2. Correct the odd `em` font sizing in all browsers.
*/

code,
kbd,
samp,
pre {
  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  /* 1 */
  font-size: 1em;
  /* 2 */
}

/*
Add the correct font size in all browsers.
*/

small {
  font-size: 80%;
}

/*
Prevent `sub` and `sup` elements from affecting the line height in all browsers.
*/

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/*
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
3. Remove gaps between table borders by default.
*/

table {
  text-indent: 0;
  /* 1 */
  border-color: inherit;
  /* 2 */
  border-collapse: collapse;
  /* 3 */
}

/*
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
3. Remove default padding in all browsers.
*/

button,
input,
optgroup,
select,
textarea {
  font-family: inherit;
  /* 1 */
  font-size: 100%;
  /* 1 */
  line-height: inherit;
  /* 1 */
  color: inherit;
  /* 1 */
  margin: 0;
  /* 2 */
  padding: 0;
  /* 3 */
}

/*
Remove the inheritance of text transform in Edge and Firefox.
*/

button,
select {
  text-transform: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Remove default button styles.
*/

button,
[type='button'],
[type='reset'],
[type='submit'] {
  -webkit-appearance: button;
  /* 1 */
  background-color: transparent;
  /* 2 */
  background-image: none;
  /* 2 */
}

/*
Use the modern Firefox focus style for all focusable elements.
*/

:-moz-focusring {
  outline: auto;
}

/*
Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
*/

:-moz-ui-invalid {
  box-shadow: none;
}

/*
Add the correct vertical alignment in Chrome and Firefox.
*/

progress {
  vertical-align: baseline;
}

/*
Correct the cursor style of increment and decrement buttons in Safari.
*/

::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
  height: auto;
}

/*
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/

[type='search'] {
  -webkit-appearance: textfield;
  /* 1 */
  outline-offset: -2px;
  /* 2 */
}

/*
Remove the inner padding in Chrome and Safari on macOS.
*/

::-webkit-search-decoration {
  -webkit-appearance: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to `inherit` in Safari.
*/

::-webkit-file-upload-button {
  -webkit-appearance: button;
  /* 1 */
  font: inherit;
  /* 2 */
}

/*
Add the correct display in Chrome and Safari.
*/

summary {
  display: list-item;
}

/*
Removes the default spacing and border for appropriate elements.
*/

blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
  margin: 0;
}

fieldset {
  margin: 0;
  padding: 0;
}

legend {
  padding: 0;
}

ol,
ul,
menu {
  list-style: none;
  margin: 0;
  padding: 0;
}

/*
Prevent resizing textareas horizontally by default.
*/

textarea {
  resize: vertical;
}

/*
1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
2. Set the default placeholder color to the user's configured gray 400 color.
*/

input::-moz-placeholder, textarea::-moz-placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

input:-ms-input-placeholder, textarea:-ms-input-placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

input::placeholder,
textarea::placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

/*
Set the default cursor for buttons.
*/

button,
[role="button"] {
  cursor: pointer;
}

/*
Make sure disabled buttons don't get the pointer cursor.
*/

:disabled {
  cursor: default;
}

/*
1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
   This can trigger a poorly considered lint error in some tools but is included by design.
*/

img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
  display: block;
  /* 1 */
  vertical-align: middle;
  /* 2 */
}

/*
Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
*/

img,
video {
  max-width: 100%;
  height: auto;
}

/*
Ensure the default browser behavior of the `hidden` attribute.
*/

[hidden] {
  display: none;
}

[type='text'],[type='email'],[type='url'],[type='password'],[type='number'],[type='date'],[type='datetime-local'],[type='month'],[type='search'],[type='tel'],[type='time'],[type='week'],[multiple],textarea,select{
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background-color: #fff;
  border-color: #6b7280;
  border-width: 1px;
  border-radius: 0px;
  padding-top: 0.5rem;
  padding-right: 0.75rem;
  padding-bottom: 0.5rem;
  padding-left: 0.75rem;
  font-size: 1rem;
  line-height: 1.5rem;
  --tw-shadow: 0 0 #0000;
}

[type='text']:focus, [type='email']:focus, [type='url']:focus, [type='password']:focus, [type='number']:focus, [type='date']:focus, [type='datetime-local']:focus, [type='month']:focus, [type='search']:focus, [type='tel']:focus, [type='time']:focus, [type='week']:focus, [multiple]:focus, textarea:focus, select:focus{
  outline: 2px solid transparent;
  outline-offset: 2px;
  --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/);
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: var(--color-primary);
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
  border-color: var(--color-primary);
}

input::-moz-placeholder, textarea::-moz-placeholder{
  color: #6b7280;
  opacity: 1;
}

input:-ms-input-placeholder, textarea:-ms-input-placeholder{
  color: #6b7280;
  opacity: 1;
}

input::placeholder,textarea::placeholder{
  color: #6b7280;
  opacity: 1;
}

::-webkit-datetime-edit-fields-wrapper{
  padding: 0;
}

::-webkit-date-and-time-value{
  min-height: 1.5em;
}

select{
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
  background-position: right 0.5rem center;
  background-repeat: no-repeat;
  background-size: 1.5em 1.5em;
  padding-right: 2.5rem;
  -webkit-print-color-adjust: exact;
          color-adjust: exact;
}

[multiple]{
  background-image: initial;
  background-position: initial;
  background-repeat: unset;
  background-size: initial;
  padding-right: 0.75rem;
  -webkit-print-color-adjust: unset;
          color-adjust: unset;
}

[type='checkbox'],[type='radio']{
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  padding: 0;
  -webkit-print-color-adjust: exact;
          color-adjust: exact;
  display: inline-block;
  vertical-align: middle;
  background-origin: border-box;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  flex-shrink: 0;
  height: 1rem;
  width: 1rem;
  color: var(--color-primary);
  background-color: #fff;
  border-color: var(--color-primary);
  border-width: 1px;
  --tw-shadow: 0 0 #0000;
}

[type='checkbox']{
  border-radius: 0px;
}

[type='radio']{
  border-radius: 100%;
}
var(--color-primary)

[type='checkbox']:focus,[type='radio']:focus{
  outline: 2px solid transparent;
  outline-offset: 2px;
  --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/);
  --tw-ring-offset-width: 2px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: var(--color-primary);
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
}

[type='checkbox']:checked,[type='radio']:checked{
  border-color: transparent;
  background-color: currentColor;
  background-size: 100% 100%;
  background-position: center;
  background-repeat: no-repeat;
}

[type='checkbox']:checked{
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e");
}

[type='radio']:checked{
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
}

[type='checkbox']:checked:hover,[type='checkbox']:checked:focus,[type='radio']:checked:hover,[type='radio']:checked:focus{
  border-color: transparent;
  background-color: currentColor;
}

[type='checkbox']:indeterminate{
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3e%3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3e%3c/svg%3e");
  border-color: transparent;
  background-color: currentColor;
  background-size: 100% 100%;
  background-position: center;
  background-repeat: no-repeat;
}

[type='checkbox']:indeterminate:hover,[type='checkbox']:indeterminate:focus{
  border-color: transparent;
  background-color: currentColor;
}

[type='file']{
  background: unset;
  border-color: inherit;
  border-width: 0;
  border-radius: 0;
  padding: 0;
  font-size: unset;
  line-height: inherit;
}

[type='file']:focus{
  outline: 1px auto -webkit-focus-ring-color;
}

*, ::before, ::after{
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
}

.container{
  width: 100%;
}

@media (min-width: 100%){
  .container{
    max-width: 100%;
  }
}

@media (min-width: 1024px){
  .container{
    max-width: 1024px;
  }
}

@media (min-width: 1280px){
  .container{
    max-width: 1280px;
  }
}

.sr-only{
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border-width: 0;
}

.pointer-events-none{
  pointer-events: none;
}

.visible{
  visibility: visible;
}

.invisible{
  visibility: hidden;
}

.fixed{
  position: fixed;
}

.absolute{
  position: absolute;
}

.relative{
  position: relative;
}

.inset-0{
  top: 0px;
  right: 0px;
  bottom: 0px;
  left: 0px;
}

.top-0{
  top: 0px;
}

.right-\[-6px\]{
  right: -6px;
}

.bottom-\[-25px\]{
  bottom: -25px;
}

.left-\[-999px\]{
  left: -999px;
}

.right-0{
  right: 0px;
}

.right-8{
  right: 2rem;
}

.-bottom-16{
  bottom: -4rem;
}

.-left-6{
  left: -1.5rem;
}

.-right-16{
  right: -4rem;
}

.-left-16{
  left: -4rem;
}

.top-2{
  top: 0.5rem;
}

.right-2{
  right: 0.5rem;
}

.left-0{
  left: 0px;
}

.bottom-0{
  bottom: 0px;
}

.right-\[-999px\]{
  right: -999px;
}

.z-\[10\]{
  z-index: 10;
}

.z-\[5\]{
  z-index: 5;
}

.z-50{
  z-index: 50;
}

.z-\[999\]{
  z-index: 999;
}

.z-\[2\]{
  z-index: 2;
}

.z-10{
  z-index: 10;
}

.order-1{
  order: 1;
}

.order-3{
  order: 3;
}

.order-2{
  order: 2;
}

.order-4{
  order: 4;
}

.col-span-12{
  grid-column: span 12 / span 12;
}

.col-span-6{
  grid-column: span 6 / span 6;
}

.col-span-8{
  grid-column: span 8 / span 8;
}

.m-2{
  margin: 0.5rem;
}

.m-auto{
  margin: auto;
}

.mx-auto{
  margin-left: auto;
  margin-right: auto;
}

.my-5{
  margin-top: 1.25rem;
  margin-bottom: 1.25rem;
}

.mx-0{
  margin-left: 0px;
  margin-right: 0px;
}

.my-2{
  margin-top: 0.5rem;
  margin-bottom: 0.5rem;
}

.my-10{
  margin-top: 2.5rem;
  margin-bottom: 2.5rem;
}

.mx-3{
  margin-left: 0.75rem;
  margin-right: 0.75rem;
}

.mx-2{
  margin-left: 0.5rem;
  margin-right: 0.5rem;
}

.my-4{
  margin-top: 1rem;
  margin-bottom: 1rem;
}

.my-3{
  margin-top: 0.75rem;
  margin-bottom: 0.75rem;
}

.ml-auto{
  margin-left: auto;
}

.ml-4{
  margin-left: 1rem;
}

.mb-6{
  margin-bottom: 1.5rem;
}

.mb-10{
  margin-bottom: 2.5rem;
}

.mr-auto{
  margin-right: auto;
}

.mr-2{
  margin-right: 0.5rem;
}

.ml-3{
  margin-left: 0.75rem;
}

.mt-2{
  margin-top: 0.5rem;
}

.mt-auto{
  margin-top: auto;
}

.mb-4{
  margin-bottom: 1rem;
}

.mb-5{
  margin-bottom: 1.25rem;
}

.mt-4{
  margin-top: 1rem;
}

.mt-5{
  margin-top: 1.25rem;
}

.mb-2{
  margin-bottom: 0.5rem;
}

.ml-1{
  margin-left: 0.25rem;
}

.mt-6{
  margin-top: 1.5rem;
}

.mr-14{
  margin-right: 3.5rem;
}

.block{
  display: block;
}

.inline-block{
  display: inline-block;
}

.flex{
  display: flex;
}

.inline-flex{
  display: inline-flex;
}

.table{
  display: table;
}

.grid{
  display: grid;
}

.hidden{
  display: none;
}

.h-full{
  height: 100%;
}

.h-\[15px\]{
  height: 15px;
}

.h-\[50px\]{
  height: 50px;
}

.h-10{
  height: 2.5rem;
}

.h-2{
  height: 0.5rem;
}

.h-\[40px\]{
  height: 40px;
}

.h-\[56px\]{
  height: 56px;
}

.h-screen{
  height: 100vh;
}

.h-12{
  height: 3rem;
}

.h-60{
  height: 15rem;
}

.h-32{
  height: 8rem;
}

.h-64{
  height: 16rem;
}

.h-5{
  height: 1.25rem;
}

.h-28{
  height: 7rem;
}

.h-\[100px\]{
  height: 100px;
}

.h-\[30px\]{
  height: 30px;
}
.h-\[400px\]{
}
.h-auto{
  height: auto;
}

.h-\[150px\]{
  height: 150px;
}

.max-h-\[50px\]{
  max-height: 50px;
}

.max-h-\[500px\]{
  max-height: 500px;
}

.max-h-\[220px\]{
  max-height: 220px;
}

.max-h-\[300px\]{
  max-height: 300px;
}

.min-h-screen{
  min-height: 100vh;
}
.w-\[800px\]{
  width: 800px !important;
}
.w-\[200px\]{
  width: 200px;
}
.w-\[568px\]{
  width: 568px !important;
}

.w-full{
  width: 100%;
}

.w-max{
  width: -webkit-max-content;
  width: -moz-max-content;
  width: max-content;
}

.w-10{
  width: 2.5rem;
}

.w-\[288px\]{
  width: 288px;
}
.ingridiant-dim{
    width:170px;
    height:170px;
}
.w-\[500px\]{
  width: 500px;
}

.w-\[40px\]{
  width: 40px;
}

.w-screen{
  width: 100vw;
}

.w-2{
  width: 0.5rem;
}

.w-24{
  width: 6rem;
}

.w-12{
  width: 3rem;
}

.w-5{
  width: 1.25rem;
}

.w-\[100px\]{
  width: 100px;
}

.w-16{
  width: 4rem;
}

.w-\[30px\]{
  width: 30px;
}

.w-\[150px\]{
  width: 150px;
}

.min-w-\[15px\]{
  min-width: 15px;
}

.min-w-\[250px\]{
  min-width: 250px;
}

.min-w-\[170px\]{
  min-width: 170px;
}

.min-w-\[100px\]{
  min-width: 100px;
}

.min-w-\[190px\]{
  min-width: 190px;
}

.min-w-\[800px\]{
  min-width: 800px;
}

.min-w-max{
  min-width: -webkit-max-content;
  min-width: -moz-max-content;
  min-width: max-content;
}

.max-w-\[300px\]{
  max-width: 300px;
}

.translate-y-4{
  --tw-translate-y: 1rem;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.translate-y-1{
  --tw-translate-y: 0.25rem;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.rotate-180{
  --tw-rotate: 180deg;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.scale-100{
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.scale-0{
  --tw-scale-x: 0;
  --tw-scale-y: 0;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.transform{
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.cursor-pointer{
  cursor: pointer;
}

.select-none{
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.resize-none{
  resize: none;
}

.resize{
  resize: both;
}

.grid-cols-12{
  grid-template-columns: repeat(12, minmax(0, 1fr));
}

.grid-cols-6{
  grid-template-columns: repeat(6, minmax(0, 1fr));
}

.flex-row{
  flex-direction: row;
}

.flex-col{
  flex-direction: column;
}

.flex-wrap{
  flex-wrap: wrap;
}

.flex-wrap-reverse{
  flex-wrap: wrap-reverse;
}

.items-center{
  align-items: center;
}

.justify-start{
  justify-content: flex-start;
}

.justify-end{
  justify-content: flex-end;
}

.justify-center{
  justify-content: center;
}

.justify-between{
  justify-content: space-between;
}

.gap-5{
  gap: 1.25rem;
}

.gap-2{
  gap: 0.5rem;
}

.gap-1{
  gap: 0.25rem;
}

.gap-4{
  gap: 1rem;
}

.gap-3{
  gap: 0.75rem;
}

.gap-y-2{
  row-gap: 0.5rem;
}

.gap-x-5{
  -moz-column-gap: 1.25rem;
       column-gap: 1.25rem;
}

.place-self-end{
  place-self: end;
}

.justify-self-end{
  justify-self: end;
}

.justify-self-center{
  justify-self: center;
}

.overflow-auto{
  overflow: auto;
}

.overflow-hidden{
  overflow: hidden;
}

.overflow-x-auto{
  overflow-x: auto;
}

.whitespace-nowrap{
  white-space: nowrap;
}

.break-all{
  word-break: break-all;
}

.rounded{
  border-radius: 0.25rem;
}

.rounded-full{
  border-radius: 9999px;
}

.rounded-lg{
  border-radius: 0.5rem;
}

.rounded-l{
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.rounded-r{
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}

.rounded-br{
  border-bottom-right-radius: 0.25rem;
}

.border-2{
  border-width: 2px;
}

.border{
  border-width: 1px;
}

.border-y{
  border-top-width: 1px;
  border-bottom-width: 1px;
}

.border-t-4{
  border-top-width: 4px;
}

.border-b{
  border-bottom-width: 1px;
}

.border-t{
  border-top-width: 1px;
}

.border-r-0{
  border-right-width: 0px;
}

.border-t-2{
  border-top-width: 2px;
}

.border-b-2{
  border-bottom-width: 2px;
}

.border-none{
  border-style: none;
}

.border-primary-color{
  border-color: var(--color-primary);
}

.border-white{
  --tw-border-opacity: 1;
  border-color: rgb(255 255 255 / var(--tw-border-opacity));
}

.border-gray-200{
  --tw-border-opacity: 1;
  border-color: rgb(229 231 235 / var(--tw-border-opacity));
}

.border-gray-300{
  --tw-border-opacity: 1;
  border-color: rgb(209 213 219 / var(--tw-border-opacity));
}

.bg-gray-50{
  --tw-bg-opacity: 1;
  background-color: rgb(249 250 251 / var(--tw-bg-opacity));
}

.bg-secondary-color{
  background-color: var(--color-secondary);
}

.bg-white{
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.bg-primary-color{
  background-color: var(--color-primary);
}

.bg-gray-200{
  --tw-bg-opacity: 1;
  background-color: rgb(229 231 235 / var(--tw-bg-opacity));
}

.bg-overlay{
  background-color: rgba(0, 0, 0, 0.6);
}

.bg-transparent{
  background-color: transparent;
}

.bg-facebook-400{
  --tw-bg-opacity: 1;
  background-color: rgb(23 120 242 / var(--tw-bg-opacity));
}

.bg-twitter-400{
  --tw-bg-opacity: 1;
  background-color: rgb(0 172 238 / var(--tw-bg-opacity));
}

.bg-whatsapp-400{
  --tw-bg-opacity: 1;
  background-color: rgb(37 211 102 / var(--tw-bg-opacity));
}

.object-cover{
  -o-object-fit: cover;
     object-fit: cover;
}

.p-2{
  padding: 0.5rem;
}

.p-3{
  padding: 0.75rem;
}

.p-4{
  padding: 1rem;
}

.p-5{
  padding: 1.25rem;
}

.p-1{
  padding: 0.25rem;
}

.py-5{
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
}

.px-5{
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}

.px-\[2px\]{
  padding-left: 2px;
  padding-right: 2px;
}

.py-2{
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.px-4{
  padding-left: 1rem;
  padding-right: 1rem;
}

.py-4{
  padding-top: 1rem;
  padding-bottom: 1rem;
}

.py-\[10px\]{
  padding-top: 10px;
  padding-bottom: 10px;
}

.px-3{
  padding-left: 0.75rem;
  padding-right: 0.75rem;
}

.py-3{
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}

.px-2{
  padding-left: 0.5rem;
  padding-right: 0.5rem;
}

.py-1{
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
}

.px-1{
  padding-left: 0.25rem;
  padding-right: 0.25rem;
}

.pl-5{
  padding-left: 1.25rem;
}

.pb-10{
  padding-bottom: 2.5rem;
}

.pl-\[20px\]{
  padding-left: 20px;
}

.pb-3{
  padding-bottom: 0.75rem;
}

.pt-7{
  padding-top: 1.75rem;
}

.pl-10{
  padding-left: 2.5rem;
}

.pb-2{
  padding-bottom: 0.5rem;
}

.pb-5{
  padding-bottom: 1.25rem;
}

.pt-5{
  padding-top: 1.25rem;
}

.pb-4{
  padding-bottom: 1rem;
}

.text-left{
  text-align: left;
}

.text-center{
  text-align: center;
}

.font-cairo{
  font-family: Cairo, sans-serif;
}

.text-sm{
  font-size: 0.875rem;
  line-height: 1.25rem;
}

.text-xl{
  font-size: 1.25rem;
  line-height: 1.75rem;
}

.text-base{
  font-size: 1rem;
  line-height: 1.5rem;
}

.text-\[15px\]{
  font-size: 15px;
}

.text-xs{
  font-size: 0.75rem;
  line-height: 1rem;
}

.text-3xl{
  font-size: 1.875rem;
  line-height: 2.25rem;
}

.text-\[35px\]{
  font-size: 35px;
}

.text-2xl{
  font-size: 1.5rem;
  line-height: 2rem;
}

.text-lg{
  font-size: 1.125rem;
  line-height: 1.75rem;
}

.text-5xl{
  font-size: 3rem;
  line-height: 1;
}

.text-8xl{
  font-size: 6rem;
  line-height: 1;
}

.text-4xl{
  font-size: 2.25rem;
  line-height: 2.5rem;
}

.font-bold{
  font-weight: 700;
}

.font-extrabold{
  font-weight: 800;
}

.font-semibold{
  font-weight: 600;
}

.uppercase{
  text-transform: uppercase;
}

.capitalize{
  text-transform: capitalize;
}

.leading-none{
  line-height: 1;
}

.tracking-wider{
  letter-spacing: 0.05em;
}

.text-txt{
  --tw-text-opacity: 1;
  color: rgb(32 33 36 / var(--tw-text-opacity));
}

.text-primary-color{
  color: var(--color-primary);
}

.text-zinc-500{
  --tw-text-opacity: 1;
  color: rgb(113 113 122 / var(--tw-text-opacity));
}

.text-white{
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.text-\[\#636469\]{
  --tw-text-opacity: 1;
  color: rgb(99 100 105 / var(--tw-text-opacity));
}

.text-gray-500{
  --tw-text-opacity: 1;
  color: rgb(107 114 128 / var(--tw-text-opacity));
}

.text-\[\#3091ff\]{
  --tw-text-opacity: 1;
  color: rgb(48 145 255 / var(--tw-text-opacity));
}

.text-gray-200{
  --tw-text-opacity: 1;
  color: rgb(229 231 235 / var(--tw-text-opacity));
}

.text-gray-400{
  --tw-text-opacity: 1;
  color: rgb(156 163 175 / var(--tw-text-opacity));
}

.text-yellow-300{
  --tw-text-opacity: 1;
  color: rgb(253 224 71 / var(--tw-text-opacity));
}

.text-green-500{
  --tw-text-opacity: 1;
  color: rgb(34 197 94 / var(--tw-text-opacity));
}

.text-red-500{
  --tw-text-opacity: 1;
  color: rgb(239 68 68 / var(--tw-text-opacity));
}

.text-green-400{
  --tw-text-opacity: 1;
  color: rgb(74 222 128 / var(--tw-text-opacity));
}

.line-through{
  -webkit-text-decoration-line: line-through;
          text-decoration-line: line-through;
}

.opacity-0{
  opacity: 0;
}

.opacity-100{
  opacity: 1;
}

.shadow{
  --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.filter{
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.transition-all{
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.transition-transform{
  transition-property: transform;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.transition{
  transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.duration-300{
  transition-duration: 300ms;
}

.duration-500{
  transition-duration: 500ms;
}

.duration-1000{
  transition-duration: 1000ms;
}

.ease-in-out{
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}

/*
================
General
================
*/

/* ----> Variables - colors <---- */

:root {
  /* Enter the color value, it must be RGB */
  --color-R: <?php echo $r ;?>;
  --color-G:<?php echo $g ;?>;
  --color-B: <?php echo $b ;?>;
  /* Automatic calculation: dark color, you can adjust the value (0.70) */
  --color-Rd: calc(var(--color-R) * 0.98);
  --color-Gd: calc(var(--color-G) * 0.98);
  --color-Bd: calc(var(--color-B) * 0.98);
  /* Automatic calculation: light color, you can adjust the value (0.25) */
  --color-Rl: calc(var(--color-R) + (0.25 * (255 - var(--color-R))));
  --color-Gl: calc(var(--color-G) + (0.25 * (255 - var(--color-G))));
  --color-Bl: calc(var(--color-B) + (0.25 * (255 - var(--color-B))));
  /* --> Used Colors <-- */
  /* Tint color */
  --color-dark: rgb(var(--color-Rd), var(--color-Gd), var(--color-Bd));
  --color-light: rgb(var(--color-Rl), var(--color-Gl), var(--color-Bl));
  /* Main colors */
  --color-primary: rgb(var(--color-R), var(--color-G), var(--color-B));
  --color-secondary: #f3f3f3;
  /* You can replace it with whatever value you want */
  --color-primary-hover: var(--color-light);
  /* You can replace it with whatever value you want */
  --color-primary-rgba: rgba(var(--color-R), var(--color-G), var(--color-B), 0.5);
  /* You can adjust the opacity */
  --color-txt: #37373f;
}

/* ----> Scrollbar <---- */

body::-webkit-scrollbar,
textarea::-webkit-scrollbar,
*[class*='overflow-auto']::-webkit-scrollbar,
*[class*='overflow-y-auto']::-webkit-scrollbar,
*[class*='overflow-x-auto']::-webkit-scrollbar,
*[class*='overflow-scroll']::-webkit-scrollbar,
*[class*='overflow-y-scroll']::-webkit-scrollbar,
*[class*='overflow-x-scroll']::-webkit-scrollbar {
  width: 8px;
  height: 8px;
}

body::-webkit-scrollbar-thumb,
textarea::-webkit-scrollbar-thumb,
*[class*='overflow-auto']::-webkit-scrollbar-thumb,
*[class*='overflow-y-auto']::-webkit-scrollbar-thumb,
*[class*='overflow-x-auto']::-webkit-scrollbar-thumb,
*[class*='overflow-scroll']::-webkit-scrollbar-thumb,
*[class*='overflow-y-scroll']::-webkit-scrollbar-thumb,
*[class*='overflow-x-scroll']::-webkit-scrollbar-thumb {
  background-color: var(--color-primary);
}

body::-webkit-scrollbar-thumb:hover,
textarea::-webkit-scrollbar-thumb:hover,
*[class*='overflow-auto']::-webkit-scrollbar-thumb:hover,
*[class*='overflow-y-auto']::-webkit-scrollbar-thumb:hover,
*[class*='overflow-x-auto']::-webkit-scrollbar-thumb:hover,
*[class*='overflow-scroll']::-webkit-scrollbar-thumb:hover,
*[class*='overflow-y-scroll']::-webkit-scrollbar-thumb:hover,
*[class*='overflow-x-scroll']::-webkit-scrollbar-thumb:hover {
  background-color: var(--color-primary-hover);
}

body::-webkit-scrollbar-thumb,
textarea::-webkit-scrollbar-thumb,
*[class*='overflow-auto']::-webkit-scrollbar-thumb,
*[class*='overflow-y-auto']::-webkit-scrollbar-thumb,
*[class*='overflow-x-auto']::-webkit-scrollbar-thumb,
*[class*='overflow-scroll']::-webkit-scrollbar-thumb,
*[class*='overflow-y-scroll']::-webkit-scrollbar-thumb,
*[class*='overflow-x-scroll']::-webkit-scrollbar-thumb {
  border-radius: 0.25rem;
}

body::-webkit-scrollbar-track,
textarea::-webkit-scrollbar-track,
*[class*='overflow-auto']::-webkit-scrollbar-track,
*[class*='overflow-y-auto']::-webkit-scrollbar-track,
*[class*='overflow-x-auto']::-webkit-scrollbar-track,
*[class*='overflow-scroll']::-webkit-scrollbar-track,
*[class*='overflow-y-scroll']::-webkit-scrollbar-track,
*[class*='overflow-x-scroll']::-webkit-scrollbar-track {
  background-color: #f3f4f6;
}

/* Hide buttons from input number */

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

input[type='number'] {
  -moz-appearance: textfield;
}

/*
================
Theme
================
*/

/* ----> Metis menu <---- */

.metismenu li.mm-active > div[aria-expanded='true']{
  color: var(--color-primary);
}

.metismenu.when-active > li.mm-active > div[aria-expanded='true']{
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.metismenu .has-arrow::after {
  border-width: 0 0 2px 2px;
  border-color: var(--color-primary);
  transform: rotate(-45deg) translate(0, -50%);
}

.metismenu .mm-active > .has-arrow::after,
.metismenu .has-arrow[aria-expanded='true']::after {
  transform: rotate(135deg) translate(0, -50%);
}

/* ----> noUi Price Range <---- */

.noUi-horizontal {
  height: 10px;
}

.noUi-target {
  /*  background: rgba(255, 107, 107, 0.2); */
  background: var(--color-primary-rgba);
  border-radius: 5px;
  border: none;
  box-shadow: none;
}

.noUi-connect {
  background: var(--color-primary);
}

.noUi-horizontal .noUi-handle {
  width: 20px;
  height: 20px;
  right: -10px;
  top: -6px;
  border-radius: 100%;
  background: var(--color-primary);
  border: none;
  box-shadow: none;
}

.noUi-handle:after,
.noUi-handle:before {
  content: none;
}

.min-price,
.max-price {
  max-width: 100px;
}

/* ----> Mixitup <---- */

.filter-controls > li.mixitup-control-active{
  color: currentColor;
}

.filter-controls > li.mixitup-control-active:after {
  content: '';
  position: absolute;
  left: 0px;
  bottom: -0.25rem;
  height: 0.25rem;
  width: 100%;
  border-radius: 0.375rem;
  background-color: var(--color-primary);
}

/* ----> Nice Select 2 <---- */

/* After Icon Arrow */

.nice-select::after {
  border-bottom: 3px solid var(--color-primary);
  border-right: 3px solid var(--color-primary);
  height: 8px;
  width: 8px;
  margin-top: -5px;
}

/* Dropdown */

.nice-select-dropdown {
  min-width: 100%;
}

/* Active */

.mixitup-control-active {
  color: var(--color-primary);
}

/* ----> Swiper Slider <---- */

/* Slide general settings */

.swiper {
  width: 100%;
  height: 100%;
}

.swiper-container {
  overflow: hidden;
}

.swiper-slide {
  overflow: visible !important;
}

.swiper-slide > img {
  display: block;
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}

/* Buttons */

.btn-slider{
  position: absolute;
  z-index: 20;
  display: flex;
  height: 2.5rem;
  width: 2.5rem;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  align-items: center;
  justify-content: center;
  border-radius: 0.25rem;
  background-color: var(--color-primary);
  font-size: 1.25rem;
  line-height: 1.75rem;
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
  --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.btn-slider:hover{
  background-color: var(--color-primary-hover);
  --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

/* Button Disabled */

.swiper-button-disabled {
  opacity: 0.35;
  cursor: auto;
  pointer-events: none;
}

/* Bullets */

.swiper-container .swiper-pagination-bullet-active {
  background: var(--color-primary) !important;
    border: 1px solid var(--color-primary) !important;

}

.swiper-container .swiper-pagination-bullet {
  background: transparent;
  border: 1px solid var(--color-primary);
  width: 10px;
  height: 10px;
  opacity: 1;

}

/* --> Slide Product <-- */

.swiper-thumbs .swiper-slide {
  overflow: hidden !important;
}

.swiper-top .swiper-slide,
.swiper-thumbs .swiper-slide {
  background: #fff;
}

.swiper-top img,
.swiper-thumbs img {
  -o-object-fit: contain;
     object-fit: contain;
}

.swiper-top {
  height: 80%;
  width: 100%;
}

.swiper-thumbs {
  height: 20%;
  box-sizing: border-box;
  padding: 10px 0 0;
}

.swiper-thumbs .swiper-slide {
  width: 25%;
  height: 100%;
  opacity: 0.4;
}

.swiper-thumbs .swiper-slide-thumb-active {
  opacity: 1;
  border: 2px solid var(--color-primary);
}

/*
================
Utilities
================
*/

.animation-loader {
  -webkit-animation: loader 1s ease-in infinite;
          animation: loader 1s ease-in infinite;
}

@-webkit-keyframes loader {
  0% {
    box-shadow: 0px 0 rgba(255, 255, 255, 0), 0px 0 rgba(255, 255, 255, 0), 0px 0 rgba(255, 255, 255, 0), 0px 0 rgba(255, 255, 255, 0);
  }

  12% {
    box-shadow: 70px 0 var(--color-primary), 0px 0 rgba(255, 255, 255, 0), 0px 0 rgba(255, 255, 255, 0), 0px 0 rgba(255, 255, 255, 0);
  }

  25% {
    box-shadow: 80px 0 var(--color-primary), 70px 0 var(--color-primary), 0px 0 rgba(255, 255, 255, 0), 0px 0 rgba(255, 255, 255, 0);
  }

  36% {
    box-shadow: 90px 0 var(--color-primary), 80px 0 var(--color-primary), 70px 0 var(--color-primary), 0px 0 rgba(255, 255, 255, 0);
  }

  50% {
    box-shadow: 100px 0 var(--color-primary), 90px 0 var(--color-primary), 80px 0 var(--color-primary), 70px 0 var(--color-primary);
  }

  62% {
    box-shadow: 200px 0 rgba(255, 255, 255, 0), 100px 0 var(--color-primary), 90px 0 var(--color-primary), 80px 0 var(--color-primary);
  }

  75% {
    box-shadow: 200px 0 rgba(255, 255, 255, 0), 200px 0 rgba(255, 255, 255, 0), 100px 0 var(--color-primary), 90px 0 var(--color-primary);
  }

  87% {
    box-shadow: 200px 0 rgba(255, 255, 255, 0), 200px 0 rgba(255, 255, 255, 0), 200px 0 rgba(255, 255, 255, 0), 100px 0 var(--color-primary);
  }

  100% {
    box-shadow: 200px 0 rgba(255, 255, 255, 0), 200px 0 rgba(255, 255, 255, 0), 200px 0 rgba(255, 255, 255, 0), 200px 0 rgba(255, 255, 255, 0);
  }
}

@keyframes loader {
  0% {
    box-shadow: 0px 0 rgba(255, 255, 255, 0), 0px 0 rgba(255, 255, 255, 0), 0px 0 rgba(255, 255, 255, 0), 0px 0 rgba(255, 255, 255, 0);
  }

  12% {
    box-shadow: 70px 0 var(--color-primary), 0px 0 rgba(255, 255, 255, 0), 0px 0 rgba(255, 255, 255, 0), 0px 0 rgba(255, 255, 255, 0);
  }

  25% {
    box-shadow: 80px 0 var(--color-primary), 70px 0 var(--color-primary), 0px 0 rgba(255, 255, 255, 0), 0px 0 rgba(255, 255, 255, 0);
  }

  36% {
    box-shadow: 90px 0 var(--color-primary), 80px 0 var(--color-primary), 70px 0 var(--color-primary), 0px 0 rgba(255, 255, 255, 0);
  }

  50% {
    box-shadow: 100px 0 var(--color-primary), 90px 0 var(--color-primary), 80px 0 var(--color-primary), 70px 0 var(--color-primary);
  }

  62% {
    box-shadow: 200px 0 rgba(255, 255, 255, 0), 100px 0 var(--color-primary), 90px 0 var(--color-primary), 80px 0 var(--color-primary);
  }

  75% {
    box-shadow: 200px 0 rgba(255, 255, 255, 0), 200px 0 rgba(255, 255, 255, 0), 100px 0 var(--color-primary), 90px 0 var(--color-primary);
  }

  87% {
    box-shadow: 200px 0 rgba(255, 255, 255, 0), 200px 0 rgba(255, 255, 255, 0), 200px 0 rgba(255, 255, 255, 0), 100px 0 var(--color-primary);
  }

  100% {
    box-shadow: 200px 0 rgba(255, 255, 255, 0), 200px 0 rgba(255, 255, 255, 0), 200px 0 rgba(255, 255, 255, 0), 200px 0 rgba(255, 255, 255, 0);
  }
}

/* ----> Tabs <---- */

.tabs-content{
  position: relative;
  overflow: hidden;
}

.tab-content{
  visibility: hidden;
  position: absolute;
  width: 100%;
  opacity: 0;
}

.btn-tabs.active{
  color: var(--color-primary);
}

.tab-content.active{
  visibility: visible;
  position: relative;
  opacity: 1;
}

/* ----> See More <---- */

.gradient-bottom{
  position: relative;
}

.gradient-bottom:after {
  content: '';
  position: absolute;
  left: 0px;
  bottom: 0px;
  height: 2rem;
  width: 100%;
  background-image: linear-gradient(hsla(0, 0%, 100%, 0.01), #f3f3f3 80%);
}

/* ----> Expand <---- */

.content-menu {
  opacity: 0;
  visibility: hidden;
  z-index: 5;
  top: 100px;
  transition: all 0.3s;
}

.content-menu.expanded {
  top: 100%;
  opacity: 1;
  visibility: visible;
}

.menu-container li > a.active, .menu-container li > div.active{
  color: var(--color-primary);
}

.container-expand{
  position: relative;
}

.content-expand{
  position: absolute;
  width: 100%;
  border-bottom-right-radius: 0.125rem;
  border-bottom-left-radius: 0.125rem;
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
  --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

/* Submenu arrow */

.sub-menu-expand.expanded > div {
  color: var(--color-primary);
}

.btn-expand i {
  transition: transform 0.35s;
}

.sub-menu-expand i {
  transition: transform 0.35s;
}

/* ----> Go Top Button <---- */

.show-gotop {
  z-index: 40;
  bottom: 2rem;
}

/*
================
Class
================
*/

.title-after{
  position: relative;
  display: flex;
  justify-content: center;
  padding-bottom: 1rem;
  text-align: center;
  font-size: 1.875rem;
  line-height: 2.25rem;
  font-weight: 700;
  text-transform: capitalize;
}

.title-after::after{
  position: absolute;
  bottom: 0px;
  border-radius: 9999px;
  content: var(--tw-content);
  background-color: var(--color-primary);
}

.title-after:after {
  content: '';
  width: 150px;
  height: 5px;
}

.badge{
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 0.75rem;
  background-color: var(--color-primary);
  font-size: 0.75rem;
  line-height: 1rem;
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.after-line-r{
  position: relative;
}

.after-line-r::after{
  position: absolute;
  right: -10px;
  display: flex;
  height: 100%;
  width: 1px;
  background-color: rgb(55 65 81 / var(--tw-bg-opacity));
  content: var(--tw-content);
  --tw-bg-opacity: 0.25;
}

.text-stroke-thin {
  -webkit-text-stroke: thin;
}

.text-stroke-medium {
  -webkit-text-stroke: medium;
}

.text-stroke-thick {
  -webkit-text-stroke: thick;
}

.or:before,
.or:after {
  content: '';
  margin-top: auto;
  margin-bottom: auto;
  height: 1px;
  width: 100%;
  --tw-bg-opacity: 1;
  background-color: rgb(209 213 219 / var(--tw-bg-opacity));
}

.input{
  height: 100%;
  width: 100%;
  border-radius: 0.25rem;
  border-width: 2px;
  --tw-border-opacity: 1;
  border-color: rgb(229 231 235 / var(--tw-border-opacity));
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
  outline: 2px solid transparent;
  outline-offset: 2px;
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms;
}

.input:focus{
  border-width: 2px;
  border-color: var(--color-primary);
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.input-rounded-l{
  height: 100%;
  width: 100%;
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
  border-width: 2px;
  border-right-width: 0px;
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
  outline: 2px solid transparent;
  outline-offset: 2px;
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms;
}

.input-rounded-l:focus{
  border-right-width: 0px;
  border-color: var(--color-primary);
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.checkbox{
  height: 1rem;
  width: 1rem;
  border-radius: 0.25rem;
  border-width: 1px;
  color: var(--color-primary);
}

.checkbox:focus{
  border-color: transparent;
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
  --tw-ring-color: var(--color-primary-hover);
  --tw-ring-offset-width: 0px;
}

.select{
  border-radius: 0.25rem;
  border-width: 2px;
  --tw-border-opacity: 1;
  border-color: rgb(229 231 235 / var(--tw-border-opacity));
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
  outline: 2px solid transparent;
  outline-offset: 2px;
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms;
}

.select:focus{
  border-width: 2px;
  border-color: var(--color-primary);
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.pagination > li.active{
  display: flex;
  height: 30px;
  width: 30px;
  align-items: center;
  justify-content: center;
  border-radius: 9999px;
  background-color: var(--color-primary);
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
  --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.card-object-fit {
  -o-object-fit: contain;
     object-fit: contain;
}

.categorie-object-fit {
  -o-object-fit: contain;
     object-fit: contain;
}

.opacity-transform {
  transition: opacity 0.3s ease, transform 0.4s ease;
}

.clamp {
  overflow: hidden;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 1;
  word-break: break-all;
}

.clamp-2 {
  overflow: hidden;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 2;
  word-break: break-all;
}

.clamp-3 {
  overflow: hidden;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  word-break: break-all;
}

.clamp-5 {
  overflow: hidden;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 5;
  word-break: break-all;
}

/* ----> Heart Animation Wishlist <---- */

.heartscale {
  -webkit-animation: heart-beat 0.5s alternate forwards;
  animation: heart-beat 0.5s alternate forwards;
  stroke-width: 0px;
}

@-webkit-keyframes heart-beat {
  0% {
    transform: scale(1, 1);
  }

  50% {
    transform: scale(1.3, 1.3);
  }

  100% {
    transform: scale(1, 1);
  }
}

@keyframes heart-beat {
  0% {
    transform: scale(1, 1);
  }

  50% {
    transform: scale(1.3, 1.3);
  }

  100% {
    transform: scale(1, 1);
  }
}

.after\:absolute::after{
  content: var(--tw-content);
  position: absolute;
}

.after\:-bottom-2::after{
  content: var(--tw-content);
  bottom: -0.5rem;
}

.after\:hidden::after{
  content: var(--tw-content);
  display: none;
}

.after\:h-px::after{
  content: var(--tw-content);
  height: 1px;
}

.after\:w-full::after{
  content: var(--tw-content);
  width: 100%;
}

.after\:bg-gray-300::after{
  content: var(--tw-content);
  --tw-bg-opacity: 1;
  background-color: rgb(209 213 219 / var(--tw-bg-opacity));
}

.hover\:rotate-\[360deg\]:hover{
  --tw-rotate: 360deg;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.hover\:border-primary-color:hover{
  border-color: var(--color-primary);
}

.hover\:bg-primary-hover:hover{
  background-color: var(--color-primary-hover);
}
.bg-primary-color-hover{
    --tw-bg-opacity: 2;

    background-color: var(  --color-primary-hover);
}
.hover\:bg-primary-color:hover{
  background-color: var(--color-primary);
}

.hover\:bg-gray-50:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(249 250 251 / var(--tw-bg-opacity));
}

.hover\:bg-facebook-500:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(22 114 228 / var(--tw-bg-opacity));
}

.hover\:bg-twitter-500:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(22 159 212 / var(--tw-bg-opacity));
}

.hover\:bg-whatsapp-500:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(40 188 95 / var(--tw-bg-opacity));
}

.hover\:text-zinc-400:hover{
  --tw-text-opacity: 1;
  color: rgb(161 161 170 / var(--tw-text-opacity));
}

.hover\:text-primary-color:hover{
  color: var(--color-primary);
}

.hover\:text-white:hover{
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.hover\:text-primary-hover:hover{
  color: var(--color-primary-hover);
}

.hover\:underline:hover{
  -webkit-text-decoration-line: underline;
          text-decoration-line: underline;
}

.hover\:shadow-md:hover{
  --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.hover\:shadow-lg:hover{
  --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.focus\:border-none:focus{
  border-style: none;
}

.focus\:outline-none:focus{
  outline: 2px solid transparent;
  outline-offset: 2px;
}

.focus\:ring-0:focus{
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.group:hover .group-hover\:visible{
  visibility: visible;
}

.group:hover .group-hover\:right-4{
  right: 1rem;
}

.group:hover .group-hover\:left-4{
  left: 1rem;
}

.group:hover .group-hover\:block{
  display: block;
}

.group:hover .group-hover\:translate-y-0{
  --tw-translate-y: 0px;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.group:hover .group-hover\:bg-white{
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.group:hover .group-hover\:text-primary-color{
  color: var(--color-primary);
}

.group:hover .group-hover\:opacity-100{
  opacity: 1;
}

.group:hover .group-hover\:shadow{
  --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.peer:checked ~ .peer-checked\:border-transparent{
  border-color: transparent;
}

.peer:checked ~ .peer-checked\:ring-2{
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.peer:checked ~ .peer-checked\:ring-primary-color{
  --tw-ring-color: var(--color-primary);
}

@media (min-width: 400px){
  .xs\:mx-8{
    margin-left: 2rem;
    margin-right: 2rem;
  }

  .xs\:block{
    display: block;
  }

  .xs\:max-h-\[200px\]{
    max-height: 200px;
  }

  .xs\:w-auto{
    width: auto;
  }

  .xs\:px-5{
    padding-left: 1.25rem;
    padding-right: 1.25rem;
  }

  .xs\:px-8{
    padding-left: 2rem;
    padding-right: 2rem;
  }

  .xs\:pb-5{
    padding-bottom: 1.25rem;
  }
}

@media (min-width: 640px){
  .sm\:-top-4{
    top: -1rem;
  }

  .sm\:-right-4{
    right: -1rem;
  }

  .sm\:right-16{
    right: 4rem;
  }

  .sm\:col-span-3{
    grid-column: span 3 / span 3;
  }

  .sm\:col-span-1{
    grid-column: span 1 / span 1;
  }

  .sm\:col-span-2{
    grid-column: span 2 / span 2;
  }

  .sm\:col-span-6{
    grid-column: span 6 / span 6;
  }

  .sm\:col-span-7{
    grid-column: span 7 / span 7;
  }

  .sm\:col-span-5{
    grid-column: span 5 / span 5;
  }

  .sm\:flex{
    display: flex;
  }

  .sm\:w-\[200px\]{
    width: 200px;
  }

  .sm\:w-\[220px\]{
    width: 220px;
  }

  .sm\:min-w-\[200px\]{
    min-width: 200px;
  }

  .sm\:flex-row{
    flex-direction: row;
  }

  .sm\:rounded-full{
    border-radius: 9999px;
  }

  .sm\:bg-primary-color{
    background-color: var(--color-primary);
  }

  .sm\:p-3{
    padding: 0.75rem;
  }

  .sm\:pb-0{
    padding-bottom: 0px;
  }

  .sm\:text-white{
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
  }

  .sm\:hover\:bg-primary-hover:hover{
    background-color: var(--color-primary-hover);
  }
}

@media (min-width: 768px){
  .md\:col-span-4{
    grid-column: span 4 / span 4;
  }

  .md\:col-span-8{
    grid-column: span 8 / span 8;
  }

  .md\:col-span-6{
    grid-column: span 6 / span 6;
  }

  .md\:m-5{
    margin: 1.25rem;
  }

  .md\:table{
    display: table;
  }

  .md\:hidden{
    display: none;
  }

  .md\:h-80{
    height: 20rem;
  }
}

@media (min-width: 1024px){
  .lg\:order-2{
    order: 2;
  }

  .lg\:order-3{
    order: 3;
  }

  .lg\:order-1{
    order: 1;
  }

  .lg\:col-span-8{
    grid-column: span 8 / span 8;
  }

  .lg\:col-span-4{
    grid-column: span 4 / span 4;
  }

  .lg\:col-span-3{
    grid-column: span 3 / span 3;
  }

  .lg\:col-span-9{
    grid-column: span 9 / span 9;
  }

  .lg\:ml-4{
    margin-left: 1rem;
  }

  .lg\:block{
    display: block;
  }

  .lg\:flex{
    display: flex;
  }

  .lg\:hidden{
    display: none;
  }

  .lg\:h-96{
    height: 24rem;
  }

  .lg\:flex-row{
    flex-direction: row;
  }

  .lg\:flex-col{
    flex-direction: column;
  }

  .lg\:flex-nowrap{
    flex-wrap: nowrap;
  }

  .lg\:gap-8{
    gap: 2rem;
  }

  .lg\:gap-x-10{
    -moz-column-gap: 2.5rem;
         column-gap: 2.5rem;
  }

  .lg\:py-5{
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
  }

  .lg\:text-3xl{
    font-size: 1.875rem;
    line-height: 2.25rem;
  }

  .lg\:text-2xl{
    font-size: 1.5rem;
    line-height: 2rem;
  }

  .lg\:after\:flex::after{
    content: var(--tw-content);
    display: flex;
  }
}

@media (min-width: 1280px){
  .xl\:col-span-3{
    grid-column: span 3 / span 3;
  }

  .xl\:col-span-4{
    grid-column: span 4 / span 4;
  }

  .xl\:block{
    display: block;
  }

  .xl\:hidden{
    display: none;
  }
}
