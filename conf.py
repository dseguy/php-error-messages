# Configuration file for the Sphinx documentation builder.
#
# For the full list of built-in configuration values, see the documentation:
# https://www.sphinx-doc.org/en/master/usage/configuration.html

# -- Project information -----------------------------------------------------
# https://www.sphinx-doc.org/en/master/usage/configuration.html#project-information

project = 'PHP error messages'
copyright = '2023-2025, Damien Seguy - <a href="https://www.exakat.io/">Exakat</a>'
author = 'Damien Seguy'
release = '1.0'

# -- General configuration ---------------------------------------------------
# https://www.sphinx-doc.org/en/master/usage/configuration.html#general-configuration

extensions = []

templates_path = ['_templates']
exclude_patterns = ['_build', 'Thumbs.db', '.DS_Store']

root_doc = 'index'


# -- Options for HTML output -------------------------------------------------
# https://www.sphinx-doc.org/en/master/usage/configuration.html#options-for-html-output

html_theme = 'alabaster'
html_static_path = ['_static']
html_favicon = '_static/logo.png'

# load PhpLexer
from sphinx.highlighting import lexers
from pygments.lexers.web import PhpLexer

# enable highlighting for PHP code not between <?php ... ?> by default
lexers['php'] = PhpLexer(startinline=True)
lexers['php-annotations'] = PhpLexer(startinline=True)

# Extra config to verify read the docs
html_extra_path = ["googlee919cb0917e4fefc.html", 
                   "sitemap.xml",
                   "BingSiteAuth.xml",
                   "robots.txt",
                   ]

html_theme_options = {
    'logo': 'logo.png',
#    'analytics_id': 'G-29LCZ34CDW',
    'github_button': True,
    'github_repo':'php-error-messages',
    'github_user':'dseguy',
    'description': 'All the PHP error messages, with explanations.',
}

html_js_files = [
    'js/custom.js',
    'https://www.googletagmanager.com/gtag/js?id=G-29LCZ34CDW'
]
