const path = require("path");

const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
const CopyPlugin = require("copy-webpack-plugin");
const ImageMinimizerPlugin = require("image-minimizer-webpack-plugin");

const { CleanWebpackPlugin } = require("clean-webpack-plugin");

module.exports = [
  {
    entry: {
      main: ["./js/main.js", "./css/main.scss"],
    },
    output: {
      filename: "./js/build/[name].min.[fullhash].js",
      path: path.resolve(__dirname),
    },
    module: {
      rules: [
        {
          test: /\.(js|jsx)$/,
          exclude: /node_modules/,
          loader: "babel-loader",
        },
        {
          test: /\.(sass|scss)$/,
          use: [
            MiniCssExtractPlugin.loader,
            "css-loader",
            "postcss-loader",
            "sass-loader",
          ],
        },
        {
          test: /\.(woff|woff2|eot|ttf|otf)$/,
          type: "asset/resource",
          generator: {
            filename: "./css/build/font/[name][ext]",
          },
        },
        {
          test: /\.(png|jpg|gif)$/,
          type: "asset/resource",
          generator: {
            filename: "./css/build/img/[name][ext]",
          },
        },
        {
          mimetype: "image/svg+xml",
          scheme: "data",
          type: "asset/resource",
          generator: {
            filename: "./css/build/img/icons/[hash].svg",
          },
        },
      ],
    },
    optimization: {
      minimizer: [
        `...`,
        new ImageMinimizerPlugin({
          exclude: './css/build/img/icons/',
          minimizer: {
            implementation: ImageMinimizerPlugin.sharpMinify,
          },
          generator: [
            {
              preset: "webp",
              implementation: ImageMinimizerPlugin.sharpGenerate,
              options: {
                encodeOptions: {
                  webp: {
                    quality: 90,
                  },
                },
              },
            },
          ],
        }),
        new CssMinimizerPlugin(),
      ],
    },
    plugins: [
      new CleanWebpackPlugin({
        cleanOnceBeforeBuildPatterns: ["./js/build/*", "./css/build/*"],
      }),
      new MiniCssExtractPlugin({
        filename: "./css/build/main.min.[fullhash].css",
      }),
      new CopyPlugin({ patterns: ["img/*.png"] }),
    ],
  },
];
