var containerPort = Ext.create('Ext.container.Container', {
    layout: {
        type: 'fit'
    },
    items: [
        {
            xtype: "panel",
            id: "pimcore_body",
            cls: "pimcore_body",
            layout: "border",
            border: false,
            items: [
                Ext.create('Ext.panel.Panel',
                    {
                        region: 'west',
                        id: 'pimcore_panel_tree_left',
                        cls: 'pimcore_main_accordion',
                        split: {
                            cls: 'pimcore_main_splitter'
                        },
                        width: 300,
                        minSize: 175,
                        collapsible: true,
                        collapseMode: 'header',
                        defaults: {
                            margin: '0'
                        },
                        layout: {
                            type: 'accordion',
                            hideCollapseTool: true,
                            animate: false
                        },
                        header: false,
                        hidden: true,
                        forceLayout: true,
                        hideMode: "offsets",
                        items: []
                    }
                )
                ,
                Ext.create('Ext.tab.Panel', {
                    region: 'center',
                    deferredRender: false,
                    id: "pimcore_panel_tabs",
                    enableTabScroll: true,
                    hideMode: "offsets",
                    cls: "tab_panel",
                    plugins:
                        [
                            Ext.create('Ext.ux.TabCloseMenu', {
                                pluginId: 'tabclosemenu',
                                showCloseAll: false,
                                closeTabText: "close_tab",
                                showCloseOthers: false,
                                //extraItemsTail: pimcore.helpers.getMainTabMenuItems()
                            }),
                            Ext.create('Ext.ux.TabReorderer', {}),
                            Ext.create('Ext.ux.TabMiddleButtonClose', {})
                        ]
                })
                ,
                {
                    region: 'east',
                    id: 'pimcore_panel_tree_right',
                    cls: "pimcore_main_accordion",
                    split: {
                        cls: 'pimcore_main_splitter'
                    },
                    width: 300,
                    minSize: 175,
                    collapsible: true,
                    collapseMode: 'header',
                    defaults: {
                        margin: '0'
                    },
                    layout: {
                        type: 'accordion',
                        hideCollapseTool: true,
                        animate: false
                    },
                    header: false,
                    hidden: true,
                    forceLayout: true,
                    hideMode: "offsets",
                    items: []
                }
            ]
        }
    ]
    
});
containerPort.updateLayout();