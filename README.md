# Little Boxes

**A portfolio block theme for developers or anyone else**

## Project Overview

Little Boxes is a WordPress portfolio block theme designed for developers and creatives seeking a clean, customizable platform to showcase their work. Built with flexibility in mind, this theme leverages modern web technologies and WordPress's block editor capabilities to provide an intuitive and dynamic user experience.

## Features

- **Responsive Design:** Ensures your portfolio looks great on all devices.
- **Customizable Blocks:** Easily modify and arrange content blocks to suit your needs.
- **Developer-Friendly:** Built with clean, maintainable code and a focus on performance.
- **SASS and Grunt Integration:** Streamline your development workflow with automated tasks.
- **Image Optimisation:** Includes tools for compressing and optimising images for faster load times.

## Getting Started

### Installation

To get started with Little Boxes, follow these steps:

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/tim-green/little-boxes-wp.git
   cd little-boxes-wp
   ```

2. **Install Node.js Dependencies:**

   Ensure you have Node.js and npm installed. Then, run:

   ```bash
   npm install
   ```

   This will install all necessary packages listed in `package.json`.

### Usage

1. **Development Workflow:**

   Use Grunt to automate tasks during development. Start the watch process to automatically compile SASS, prefix CSS, and more:

   ```bash
   npm run watch
   ```

   This command will use Grunt to monitor changes in your files and apply necessary transformations.

2. **Building for Production:**

   Before deploying, ensure your assets are optimised and ready for production. Use Grunt tasks to clean, compile, and minify your assets.

   ```bash
   grunt build
   ```

   This command will prepare your theme for production by cleaning previous builds and optimising assets.

## Contributing

I do welcome contributions from the community! To contribute:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/YourFeature`).
3. Make your changes and commit them (`git commit -m 'Add new feature'`).
4. Push to the branch (`git push origin feature/YourFeature`).
5. Open a pull request and describe your changes.

Please ensure that your code follows the project's coding standards and includes relevant tests.

## License

This project is licensed under the MIT License. See the LICENSE file for more information.