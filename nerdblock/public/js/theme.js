/*! YOOtheme Pro v1.19.2 | https://yootheme.com */ ! function (i, n) {
    "use strict";
    i = i && i.hasOwnProperty("default") ? i.default : i;
    var o = '.tm-header ~ [class*="uk-section"], .tm-header ~ :not(.tm-page) > [class*="uk-section"]',
        t = {
            update: [{
                read: function () {
                    var t = n.$(o),
                        e = n.attr(t, "tm-header-transparent");
                    if (!e || !t) return !1;
                    var a = i.getComponent(n.$("[uk-sticky]", this.$el), "sticky");
                    if (a) {
                        var r = a.$options.data;
                        "uk-animation-slide-top" !== r.animation && n.each({
                            top: o,
                            animation: "uk-animation-slide-top",
                            clsInactive: "uk-navbar-transparent uk-" + e
                        }, function (t, e) {
                            return r[e] = a[e] = a.$props[e] = t
                        }), a.$props.top = t.offsetHeight <= window.innerHeight ? o : n.offset(t).top + 300
                    }
                    return {
                        section: t,
                        modifier: e,
                        height: this.$el.offsetHeight
                    }
                },
                write: function (t) {
                    var e = t.height,
                        a = t.modifier,
                        r = t.section;
                    if (!this.placeholder) {
                        n.addClass(this.$el, "tm-header-transparent tm-header-overlay"), n.addClass(n.$$(".tm-headerbar-top, .tm-headerbar-bottom, .tm-toolbar-transparent"), "uk-" + a), n.removeClass(n.$(".tm-toolbar-transparent.tm-toolbar-default"), "tm-toolbar-default");
                        var i = n.$("[uk-navbar]", this.$el);
                        "push" === n.attr(i, "dropbar-mode") && n.attr(i, "dropbar-mode", "slide"), n.$("[uk-sticky]", this.$el) || n.addClass(n.$(".uk-navbar-container", this.$el), "uk-navbar-transparent uk-" + a);
                        var o = n.$("[uk-grid]", r);
                        this.placeholder = o && n.hasAttr(r, "tm-header-transparent-placeholder") && n.before(o, '<div class="tm-header-placeholder uk-margin-remove-adjacent"></div>')
                    }
                    n.css(this.placeholder, {
                        height: e
                    })
                },
                events: ["load", "resize"]
            }]
        };
    if (i.component("header", t), n.isRtl) {
        var e = {
            init: function () {
                this.$props.pos = n.swap(this.$props.pos, "left", "right")
            }
        };
        i.mixin(e, "drop"), i.mixin(e, "tooltip")
    }
    n.ready(function () {
        var t = window,
            e = t.$load,
            a = void 0 === e ? [] : e,
            r = t.$theme;
        ! function t(e, a) {
            e.length && e.shift()(a, function () {
                return t(e, a)
            })
        }(a, void 0 === r ? {} : r)
    })
}(UIkit, UIkit.util);
