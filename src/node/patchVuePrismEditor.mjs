import { existsSync, readFileSync, writeFileSync } from "fs";
import chalk from "chalk";
import consola from "consola";

const srcPath = "node_modules/vue-prism-editor/dist/prismeditor.esm.js";

async function main() {
  consola.start("Vue Prism Editor patcher");

  if (!existsSync(srcPath)) {
    consola.error(
      `couldn't find ${chalk.cyan(srcPath)}, did you run ${chalk.green(
        "npm install"
      )}?`
    );
    return;
  }

  const source = readFileSync(srcPath, "utf8");

  if (!source.includes("Vue.extend")) {
    consola.success("already patched");
    return;
  }

  consola.info("patching the source component...");

  let output = source
    .replace(/^import Vue from 'vue';/, "")
    .replace("/*#__PURE__*/Vue.extend(", "")
    .replace(/\}\)(;\s+export)/, "}$1");

  writeFileSync(srcPath, output, "utf8");

  consola.success("successfully patched");
}

main().catch((err) => consola.error(err));
