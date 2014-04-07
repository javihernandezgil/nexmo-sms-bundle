# Nexmo Sms Bundle

**This bundle is under development, do not use it yet, it could change.**

## Configuration

**composer.json**

    "repositories": [
        { "type": "vcs", "url": "https://github.com/javihernandezgil/nexmo-bundle.git" },
        { "type": "vcs", "url": "https://github.com/javihernandezgil/nexmo-extra-bundle.git" },
        ...
    ],

    "require": {
        ...
        "javihernandezgil/nexmo-bundle": "dev-master",
        "javihernandezgil/nexmo-extra-bundle": "dev-master",
        ...
    },

**app/AppKernel.php**

    new Jhg\NexmoBundle\JhgNexmoBundle(),
    new \Jhg\NexmoSmsBundle\JhgNexmoSmsBundle(),