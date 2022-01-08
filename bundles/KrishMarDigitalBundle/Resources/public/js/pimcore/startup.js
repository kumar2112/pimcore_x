pimcore.registerNS("pimcore.plugin.KrishMarDigitalBundle");

pimcore.plugin.KrishMarDigitalBundle = Class.create(pimcore.plugin.admin, {
    getClassName: function () {
        return "pimcore.plugin.KrishMarDigitalBundle";
    },

    initialize: function () {
        pimcore.plugin.broker.registerPlugin(this);
    },

    pimcoreReady: function (params, broker) {
        // alert("KrishMarDigitalBundle ready!");
    }
});

var KrishMarDigitalBundlePlugin = new pimcore.plugin.KrishMarDigitalBundle();
