module.exports = function (eleventyConfig) {
  // Pass static assets through unchanged
  eleventyConfig.addPassthroughCopy("assets");

  // Watch CSS and JS for changes during dev
  eleventyConfig.addWatchTarget("assets/css/");
  eleventyConfig.addWatchTarget("assets/js/");

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
