module.exports = function (eleventyConfig) {
  // Pass static assets through unchanged
  eleventyConfig.addPassthroughCopy("assets");

  // Watch CSS and JS for changes during dev
  eleventyConfig.addWatchTarget("assets/css/");
  eleventyConfig.addWatchTarget("assets/js/");

  // Filter to select items from an array where a key matches a value
  // Usage: collection | selectattr("key", "equalto", "value")
  eleventyConfig.addFilter("selectattr", function (arr, key, operator, value) {
    if (!Array.isArray(arr)) return [];
    if (operator === "equalto") {
      return arr.filter(item => item[key] === value);
    }
    return arr;
  });

  return {
    dir: {
      input: ".",
      includes: "_includes",
      data: "_data",
      output: "_site",
    },
    // Use Nunjucks for all template files
    markdownTemplateEngine: "njk",
    htmlTemplateEngine: "njk",
    templateFormats: ["njk", "html", "md"],
  };
};
