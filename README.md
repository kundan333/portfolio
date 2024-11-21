Kundankb Portfolio Theme
===

Welcome to the custom WordPress theme for my portfolio website, [kundankb.com](https://kundankb.com). This theme showcases my skills and projects and is built with modern tools and technologies, including Tailwind CSS, PHP, HTML, and CSS.

My ultra-clean design and code provide an excellent foundation for a professional portfolio. Here's what makes this theme unique:

* **Custom WordPress Theme**: Developed entirely from scratch for full control and customization.
* **Tailwind CSS Integration**: Provides modern, utility-first styling for rapid UI development.
* **Responsive Design**: Ensures optimal viewing experiences on all devices.
* **Custom Components**: Includes flexible navigation menus, customizable header, and dynamic sections.
* **Optimized Performance**: Minimal dependencies and clean code for fast load times.
* **GPL-2.0-or-later License**: Open-source and ready to extend.

Installation
---------------

### Requirements

This theme requires the following dependencies:

- [Node.js](https://nodejs.org/)
- [Composer](https://getcomposer.org/)

### Quick Start

1. Clone or download this repository.  
2. Rename it to your desired project name (if applicable).  
3. Install necessary dependencies using the commands below.  

```sh
$ composer install
$ npm install
```

4. Activate the theme in your WordPress admin panel.

### Setup

To start using the tools included in the theme, follow these steps:

1. Compile assets (CSS, JavaScript, etc.) with the following commands:

```sh
$ npm run compile:css
$ npm run watch
```

2. Generate translation files:

```sh
$ composer make-pot
```

3. Lint PHP and SASS files for errors and coding standards:

```sh
$ composer lint:php
$ composer lint:wpcs
$ npm run lint:scss
```

4. Bundle the theme for distribution:

```sh
$ npm run bundle
```

### Available CLI Commands

- `composer lint:wpcs` : Checks PHP files against [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
- `composer lint:php` : Validates PHP syntax.
- `composer make-pot` : Generates a `.pot` translation file.
- `npm run compile:css` : Compiles Tailwind CSS files.
- `npm run watch` : Watches files for changes and recompiles automatically.
- `npm run lint:scss` : Lints SASS files.
- `npm run bundle` : Prepares a `.zip` file for theme distribution.

Theme Features
---------------

1. **Custom Navigation**: Flexible menu system tailored for mobile and desktop.
2. **Dynamic Sections**: Build pages with reusable components.
3. **Dark Mode Ready**: Ensures visuals look great on light and dark themes.
4. **Tailwind CSS Utility Classes**: Speeds up development without adding unnecessary weight.

Contribute
----------

Feel free to submit issues or pull requests on the [GitHub repository](https://github.com/kundan333/portfolio).

### License

This theme is licensed under the GPL-2.0-or-later license. Use it, extend it, and make it your own!

---
Now you're ready to explore and customize your portfolio theme. Make something awesome! 🚀
