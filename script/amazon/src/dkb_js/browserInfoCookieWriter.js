/**
 * Copyright (c) 2009 by Crealogix E-Banking Solutions AG. All rights reserved.
 *
 * Creates the "browser info" cookies used for Sec Pack 1.
 * <p>
 * The idea of these cookies is, that if an attacker tries to steal an Airlock session but
 * is not using precisely the same browser setup then the server will detect the change of
 * browser context and abort the session. However, it would obviously not be difficult for
 * a smart attacker to work around this obstacle, so these measures only provide a very
 * superficial level of weak security.
 * <p>
 * The function writeCookies does not create the same cookies as the older browserInfo.js
 * script used to do, because the old script performed client-side user agent analysis and
 * delivered a lot of values that were unreliable and indeed useless.  Instead, just a few
 * cookies are created, containing concatenated values that might realistically be useful
 * for server-side analysis.  No user agent analysis is performed - if needed for logging,
 * it should be performed server-side using the value supplied in the request header.
 *
 * @author JonB
 */

CLX = {};

CLX.writeEncodedCookie = function(key, value, maxAge, path, domain, secure) {
	CLX.writeCookie(key, encodeURIComponent(value), maxAge, path, domain, secure);
};

CLX.deleteCookie = function(key, path, domain) {
	CLX.writeCookie(key, "", 0, path, domain, false);
};

CLX.writeCookie = function(key, value, maxAge, path, domain, secure) {
	var cookieValue = key + "=" + value;
	if (maxAge === 0 || maxAge > 0) {
		cookieValue += "; max-age=" + (maxAge * 60000)
	}
	if (path) {
		cookieValue += "; path=" + path
	}
	if (domain) {
		cookieValue += "; domain=" + domain
	}
	if (secure) {
		cookieValue += "; secure"
	}
	document.cookie = cookieValue;
};

/**
 * Creates browser info cookies using the supplied cookie name prefix
 */
CLX.writeBrowserInfoCookies = function() {

	var prefix = "BRSINFO_",

  /**
   * The value used to control the lifetime of the cookie
   */
  SESSION_LIFETIME = -1,

  /**
   * The path for the cookies
   */
  ROOT = "/",

  /**
   * The protocol used for a secure connection
   */
  HTTPS = "https",

  /**
   * String representation of the boolean value
   */
  TRUE = "true",

  /**
   * The delimiter between the key and value of an individual element of the cookie
   */
  KEY_VALUE_DELIM = "=",

  /**
   * The delimiter for concatenating multiple key/value elements into a single cookie string
   */
  ELEMENT_DELIM = ";",

  /**
   * The name of the environment info cookie
   */
  ENVIRONMENT = "env",

  /**
   * The key for the boolean value signifying if Java is enabled, only written if true
   */
  JAVA_ENABLED = "javaEnabled",

  /**
   * The key for the window dimensions detail
   */
  WINDOW_SIZE = "windowSize",

  /**
   * The delimiter for the window width and height
   */
  WINDOW_SIZE_DELIM = "x",

  /**
   * The name of the plugins info cookie
   */
  PLUGINS = "browserPlugins",

  /**
   * The regular expression used to identify the last token of a plugin filename
   * (delimited by white space, forward slash or backslash)
   */
  PLUGIN_FILENAME_EXPR = /[^\s\/\\]+$/,

  /**
   * The delimiter used between plugin filenames
   */
  PLUGIN_DELIM = ";",

  /**
   * The name of the screen info cookie
   */
  SCREEN = "screen",

  /**
   * The screen properties to pack into a cookie
   */
  SCREEN_PROPS = ["width", "height", "colorDepth"],

  /**
   * The navigator object
   */
  nav = window.navigator,

  /**
   * Writes (or replaces) the cookie associated with the supplied name
   */
  writeCookie = function(name, value) {
    var protocol, isHttps;

    // See if the current document was loaded via HTTPS: if so, create a secure cookie
    protocol = window.location.protocol;
    isHttps = protocol.indexOf(HTTPS) === 0;
    CLX.writeEncodedCookie(prefix + name, value, SESSION_LIFETIME, ROOT, null, isHttps);
  },

  /**
   * Deletes the cookie associated with the supplied name, if it exists
   */
  deleteCookie = function(name) {
    CLX.deleteCookie(prefix + name, ROOT);
  },

  /**
   * Writes the cookie containing environment values (javaEnabled, windowSize)
   */
  writeEnvironmentCookie = function() {
    // Add the window dimensions
    var cookieVal = WINDOW_SIZE + KEY_VALUE_DELIM + window.screen.width + WINDOW_SIZE_DELIM + window.screen.height;

    // See if Java is enabled (only add to cookie value if it is enabled)
    if (nav.javaEnabled()) {
      cookieVal += ELEMENT_DELIM + JAVA_ENABLED + KEY_VALUE_DELIM + TRUE;
    }

    // Write the cookie
    writeCookie(ENVIRONMENT, cookieVal);
  },

  /**
   * Writes the cookie containing browser plugin details (concatenated plugin filenames)
   */
  writePluginsCookie = function() {
    var cookieVal = "", filename, i;
    if (nav.plugins && nav.plugins.length) {

      // Loop over the plugin filenames and append together
      for (i = 0; i < nav.plugins.length; ++i) {
        filename = nav.plugins[i].filename;
        if (filename) {

          // The regular expression extracts just the last part of the filename
          cookieVal += filename.match(PLUGIN_FILENAME_EXPR) + PLUGIN_DELIM;
        }
      }
      // Write the cookie
      writeCookie(PLUGINS, cookieVal);
    } else {

      // No plugins to read (maybe running in IE). Delete the cookie, if it exists.
      deleteCookie(PLUGINS);
    }
  },

  /**
   * Writes the cookie containing screen details (width, height, colorDepth)
   */
  writeScreenCookie = function() {
    var cookieVal = "", screen = window.screen, propName, i;
    if (screen) {

      // Loop over the configured attributes and build the cookie value
      for (i = 0; i < SCREEN_PROPS.length; ++i) {
        if (i > 0) {
          cookieVal += ELEMENT_DELIM;
        }
        propName = SCREEN_PROPS[i];
        cookieVal += propName + KEY_VALUE_DELIM + screen[propName];
      }
      // Write the cookie
      writeCookie(SCREEN, cookieVal);
    } else {

      // No screen to examine. Delete the cookie, if it exists
      deleteCookie(SCREEN);
    }
  };
  // Write the cookies
  writeEnvironmentCookie();
  writePluginsCookie();
  writeScreenCookie();
};

CLX.writeBrowserInfoCookies();
