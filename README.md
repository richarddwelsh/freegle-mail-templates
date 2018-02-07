## Installation notes

1. To clone and set up:
```
git clone --recursive https://github.com/richarddwelsh/freegle-mail-templates.git
cd freegle-mail-templates
npm install
cd mini-web-server
npm install
```
2. To run the mini MJML app:
   * Save a file in `~/.credentials/smpt-credentials.json` containing your SMTP relay details (use `mini-web-server/smtp_credentials.json` as a template)
   * Run this command from the `mini-web-server` directory:
```
node main.js
```
