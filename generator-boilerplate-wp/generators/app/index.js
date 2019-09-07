'use strict';
const Generator = require('yeoman-generator');
const chalk = require('chalk');
const yosay = require('yosay');

module.exports = class extends Generator {
  prompting() {
    // Have Yeoman greet the user.
    this.log(
      yosay(`Welcome to the smashing ${chalk.red('generator-boilerplate-wp')} generator!`)
    );

    var prompts = [{
      type   : 'input',
      name   : 'project_name',
      message: 'What is you project name ? '
    }, {
      type   : 'input',
      name   : 'description',
      message: 'What is Description?'
    },{
      type   : 'input',
      name   : 'author',
      message: 'What is author name?'
      
    }];

    return this.prompt(prompts).then(props => {
      // To access props later use this.props.someAnswer;
      this.props = props;
    });
  }

  writing() {
    //package.json
    this.fs.copyTpl(
      this.templatePath('_package.json'),
      this.destinationPath('package.json'), {
        project_name: this.props.project_name,
        description: this.props.description,
        author      : this.props.author
      }
    );


    //Page 404
    this.fs.copyTpl(
      this.templatePath('_404.php'),
      this.destinationPath('404.php')
    );

    //Nav Walker
    this.fs.copyTpl(
      this.templatePath('_class-wp-bootstrap-navwalker.php'),
      this.destinationPath('class-wp-bootstrap-navwalker.php')
    );

    //Footer
    this.fs.copyTpl(
      this.templatePath('_footer.php'),
      this.destinationPath('footer.php')
    );

    //Functions
    this.fs.copyTpl(
      this.templatePath('_functions.php'),
      this.destinationPath('functions.php')
    );

    //Gulpfile
    this.fs.copyTpl(
      this.templatePath('_gulpfile.js'),
      this.destinationPath('gulpfile.js')
    );

    //Header
    this.fs.copyTpl(
      this.templatePath('_header.php'),
      this.destinationPath('header.php')
    );

    //Index
    this.fs.copyTpl(
      this.templatePath('_index.php'),
      this.destinationPath('index.php')
    );

    //Page
    this.fs.copyTpl(
        this.templatePath('_page.php'),
        this.destinationPath('page.php')
    );

    //Screenshot
    this.fs.copyTpl(
      this.templatePath('_screenshot.png'),
      this.destinationPath('screenshot.png')
    );

    //Single
    this.fs.copyTpl(
      this.templatePath('_single.php'),
      this.destinationPath('single.php')
    );

    //Style wp
    this.fs.copyTpl(
      this.templatePath('_style.css'),
      this.destinationPath('style.css')
    );

    //gitignore
    this.fs.copyTpl(
      this.templatePath('_.gitignore'),
      this.destinationPath('.gitignore')
    );

    //README
    this.fs.copyTpl(
      this.templatePath('_README.md'),
      this.destinationPath('README.md')
    );

    //src
    this.fs.copyTpl(
      this.templatePath('src'),
      this.destinationPath('src')
    );


  }

  install() {
    this.npmInstall(); //npm install
  }
};
