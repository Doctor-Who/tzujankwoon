---
title: Contact
form:
    name: tzujankwoon-form
    fields:
        - name: nom
          label: Nom
          placeholder: Entrer votre nom
          autofocus: on
          autocomplete: on
          type: text
          validate:
            required: true

        - name: email
          label: Email
          placeholder: Entrer votre adresse email
          type: text
          validate:
            rule: email
            required: true

        - name: message
          label: Message
          size: long
          placeholder: Entrer votre message
          type: textarea
          validate:
            required: true

    buttons:
        - type: submit
          value: Envoyer
          classes: gdlr-button with-border excerpt-read-more

    process:
        - email:
            from: "{{ config.plugins.email.from }}"
            to:
              - "{{ config.plugins.email.from }}"
              - "{{ form.value.email }}"
            subject: "[Feedback] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        - save:
            fileprefix: feedback-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        - message: Merci pour votre message!
        - display: merci
---