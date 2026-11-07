# RainLoop Webmail Fork

## Development Hints

To build owncloud Rainloop Legacy app execute

1. `docker compose run --no-deps --rm node yarn install --frozen-lockfile`
2. `make rt-build`

<div align="center">
  <a href="https://github.com/RainLoop/rainloop-webmail">
    <img width="200" height="200" src="https://www.rainloop.net/static/img/logo-256x256-tiny.png">
  </a>
  <br>
  <h1>RainLoop Webmail</h1>
  <br>
  <p>
    Simple, modern &amp; fast web-based email client.
  </p>
  <p>
    Modest system requirements, decent performance, simple installation and upgrade, no database required
    - all these make RainLoop Webmail a perfect choice for your email solution.
  </p>
  <h2></h2>
  <br>
</div>

For more information about the product, check [rainloop.net](http://www.rainloop.net/).

Information about installing the product, check the [documentation page](http://www.rainloop.net/docs/installation/).

## PHP extensions

The PHP `zip` extension (`ext-zip`) is required for installing plugins from the
admin interface and for RainLoop core updates. The ZIP attachment action is
also available when this extension is enabled.

## License

**RainLoop Webmail (Legacy edition)** is released under
**MIT License**.
https://choosealicense.com/licenses/mit/

Copyright (c) 2022 Rainloop Team
