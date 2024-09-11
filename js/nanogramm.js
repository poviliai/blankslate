var Nanogram = function() {
    "use strict";
    var t = function() {
        return (t = Object.assign || function(t) {
            for (var n, o = 1, r = arguments.length; o < r; o++)
                for (var e in n = arguments[o]) Object.prototype.hasOwnProperty.call(n, e) && (t[e] = n[e]);
            return t
        }).apply(this, arguments)
    };

    function n(t, n, o, r) {
        return new(o || (o = Promise))((function(e, i) {
            function l(t) { try { u(r.next(t)) } catch (t) { i(t) } }

            function a(t) { try { u(r.throw(t)) } catch (t) { i(t) } }

            function u(t) {
                var n;
                t.done ? e(t.value) : (n = t.value, n instanceof o ? n : new o((function(t) { t(n) }))).then(l, a)
            }
            u((r = r.apply(t, n || [])).next())
        }))
    }

    function o(t, n) {
        var o, r, e, i, l = { label: 0, sent: function() { if (1 & e[0]) throw e[1]; return e[1] }, trys: [], ops: [] };
        return i = { next: a(0), throw: a(1), return: a(2) }, "function" == typeof Symbol && (i[Symbol.iterator] = function() { return this }), i;

        function a(i) {
            return function(a) {
                return function(i) {
                    if (o) throw new TypeError("Generator is already executing.");
                    for (; l;) try {
                        if (o = 1, r && (e = 2 & i[0] ? r.return : i[0] ? r.throw || ((e = r.return) && e.call(r), 0) : r.next) && !(e = e.call(r, i[1])).done) return e;
                        switch (r = 0, e && (i = [2 & i[0], e.value]), i[0]) {
                            case 0:
                            case 1:
                                e = i;
                                break;
                            case 4:
                                return l.label++, { value: i[1], done: !1 };
                            case 5:
                                l.label++, r = i[1], i = [0];
                                continue;
                            case 7:
                                i = l.ops.pop(), l.trys.pop();
                                continue;
                            default:
                                if (!(e = l.trys, (e = e.length > 0 && e[e.length - 1]) || 6 !== i[0] && 2 !== i[0])) { l = 0; continue }
                                if (3 === i[0] && (!e || i[1] > e[0] && i[1] < e[3])) { l.label = i[1]; break }
                                if (6 === i[0] && l.label < e[1]) { l.label = e[1], e = i; break }
                                if (e && l.label < e[2]) { l.label = e[2], l.ops.push(i); break }
                                e[2] && l.ops.pop(), l.trys.pop();
                                continue
                        }
                        i = n.call(t, l)
                    } catch (t) { i = [6, t], r = 0 } finally { o = e = 0 }
                    if (5 & i[0]) throw i[1];
                    return { value: i[0] ? i[1] : void 0, done: !0 }
                }([i, a])
            }
        }
    }
    return function() {
        function r() { this.INSTAGRAM_HOSTNAME = "https://www.instagram.com/", this.SHARED_DATA_TAG_EXP = /^[\w\W]*<script type="text\/javascript">window._sharedData = ({[\w\W]*});<\/script>[\w\W]*$/g }
        return r.prototype.buildUrl = function(t) { return "" + this.INSTAGRAM_HOSTNAME + t }, r.prototype.parseJSON = function(t, n) { try { var o = t; return n && (o = t.replace(this.SHARED_DATA_TAG_EXP, "$1")), JSON.parse(o) } catch (t) { console.error("Nanogram: failure during parsing JSON.\nError message: " + t.message) } }, r.prototype.HTTP = function(t, r) {
            return void 0 === r && (r = !0), n(this, void 0, void 0, (function() {
                var n;
                return o(this, (function(o) {
                    switch (o.label) {
                        case 0:
                            return [4, function(t, n) {
                                return new Promise((function(o, r) {
                                    var e = new XMLHttpRequest;
                                    e.open(t, n), e.onload = function() { return o(e) }, e.onerror = r, e.send()
                                }))
                            }("GET", t).then((function(t) {
                                if (t.status >= 200 && t.status < 400) return t.responseText;
                                console.error(["Nanogram: error during request", "Probably making too many requests to the Instagram application.", "Also check method parameters"].join("\n"))
                            }))];
                        case 1:
                            return (n = o.sent()) ? [2, this.parseJSON(n, r)] : [2]
                    }
                }))
            }))
        }, r.logError = function(t) {
            var n = "Nanogram: please provide a valid " + t.join(" and ");
            console.error(n)
        }, r.prototype.getMediaByUsername = function(e) {
            var i, l, a;
            return n(this, void 0, void 0, (function() {
                var n, u, s, c;
                return o(this, (function(o) {
                    switch (o.label) {
                        case 0:
                            return n = { profile: null, ok: !1 }, e ? (u = this.buildUrl(e), [4, this.HTTP(u)]) : (r.logError(["username"]), [2, n]);
                        case 1:
                            return s = o.sent(), c = (null === (a = null === (l = null === (i = null == s ? void 0 : s.entry_data) || void 0 === i ? void 0 : i.ProfilePage[0]) || void 0 === l ? void 0 : l.graphql) || void 0 === a ? void 0 : a.user) || null, [2, t(t({}, n), { profile: c, ok: Boolean(c) })]
                    }
                }))
            }))
        }, r.prototype.getMediaByTag = function(e) {
            var i, l;
            return n(this, void 0, void 0, (function() {
                var n, a, u, s;
                return o(this, (function(o) {
                    switch (o.label) {
                        case 0:
                            return n = { tag: null, ok: !1 }, e ? (a = this.buildUrl("explore/tags/" + e), [4, this.HTTP(a)]) : (r.logError(["tag"]), [2, n]);
                        case 1:
                            return u = o.sent(), s = (null === (l = null === (i = null == u ? void 0 : u.entry_data) || void 0 === i ? void 0 : i.TagPage[0]) || void 0 === l ? void 0 : l.graphql.hashtag) || null, [2, t(t({}, n), { tag: s, ok: Boolean(s) })]
                    }
                }))
            }))
        }, r.prototype.getMediaByLocation = function(e, i) {
            var l, a, u;
            return n(this, void 0, void 0, (function() {
                var n, s, c, d;
                return o(this, (function(o) {
                    switch (o.label) {
                        case 0:
                            return n = { location: null, ok: !1 }, void 0 !== e && i ? (s = this.buildUrl("explore/locations/" + e + "/" + i), [4, this.HTTP(s)]) : (r.logError(["location id", "place name"]), [2, n]);
                        case 1:
                            return c = o.sent(), d = (null === (u = null === (a = null === (l = null == c ? void 0 : c.entry_data) || void 0 === l ? void 0 : l.LocationsPage[0]) || void 0 === a ? void 0 : a.graphql) || void 0 === u ? void 0 : u.location) || null, [2, t(t({}, n), { location: d, ok: Boolean(d) })]
                    }
                }))
            }))
        }, r.prototype.getCountries = function() {
            var r, e;
            return n(this, void 0, void 0, (function() {
                var n, i, l, a;
                return o(this, (function(o) {
                    switch (o.label) {
                        case 0:
                            return n = { country_list: null, ok: !1 }, i = this.buildUrl("explore/locations/"), [4, this.HTTP(i)];
                        case 1:
                            return l = o.sent(), a = (null === (e = null === (r = null == l ? void 0 : l.entry_data) || void 0 === r ? void 0 : r.LocationsDirectoryPage[0]) || void 0 === e ? void 0 : e.country_list) || null, [2, t(t({}, n), { country_list: a, ok: Boolean(a) })]
                    }
                }))
            }))
        }, r.prototype.getCitiesByCountryId = function(e) {
            var i;
            return n(this, void 0, void 0, (function() {
                var n, l, a, u, s, c, d, v;
                return o(this, (function(o) {
                    switch (o.label) {
                        case 0:
                            return n = { city_list: null, country_info: null, ok: !1 }, e ? (l = this.buildUrl("explore/locations/" + e), [4, this.HTTP(l)]) : (r.logError(["country id"]), [2, n]);
                        case 1:
                            return a = o.sent(), u = t({}, null === (i = null == a ? void 0 : a.entry_data) || void 0 === i ? void 0 : i.LocationsDirectoryPage[0]), s = u.city_list, c = void 0 === s ? null : s, d = u.country_info, v = void 0 === d ? null : d, [2, t(t({}, n), { country_info: v, city_list: c, ok: Boolean(v || c) })]
                    }
                }))
            }))
        }, r.prototype.getPlacesByCityId = function(e) {
            var i;
            return n(this, void 0, void 0, (function() {
                var n, l, a, u, s, c, d, v, h, p;
                return o(this, (function(o) {
                    switch (o.label) {
                        case 0:
                            return n = { place: { city_info: null, country_info: null, location_list: null }, ok: !1 }, e ? (l = this.buildUrl("explore/locations/" + e), [4, this.HTTP(l)]) : (r.logError(["city id"]), [2, n]);
                        case 1:
                            return a = o.sent(), u = t({}, null === (i = null == a ? void 0 : a.entry_data) || void 0 === i ? void 0 : i.LocationsDirectoryPage[0]), s = u.city_info, c = void 0 === s ? null : s, d = u.country_info, v = void 0 === d ? null : d, h = u.location_list, p = void 0 === h ? null : h, [2, t(t({}, n), { place: { city_info: c, country_info: v, location_list: p }, ok: Boolean(c || v || p) })]
                    }
                }))
            }))
        }, r.prototype.getMediaByPlaceId = function(e) {
            var i, l;
            return n(this, void 0, void 0, (function() {
                var n, a, u, s;
                return o(this, (function(o) {
                    switch (o.label) {
                        case 0:
                            return n = { location: null, ok: !1 }, e ? (a = this.buildUrl("explore/locations/" + e), [4, this.HTTP(a)]) : (r.logError(["place id"]), [2, n]);
                        case 1:
                            return u = o.sent(), s = (null === (l = null === (i = null == u ? void 0 : u.entry_data) || void 0 === i ? void 0 : i.LocationsPage[0]) || void 0 === l ? void 0 : l.graphql.location) || null, [2, t(t({}, n), { location: s, ok: Boolean(s) })]
                    }
                }))
            }))
        }, r.prototype.getMediaBySearchQuery = function(e) {
            return n(this, void 0, void 0, (function() {
                var n, i, l, a, u, s, c, d, v;
                return o(this, (function(o) {
                    switch (o.label) {
                        case 0:
                            return n = { media: { users: null, hashtags: null, places: null }, ok: !1 }, e ? (i = this.buildUrl("web/search/topsearch/?context=blended&query=" + e + "&include_reel=true"), [4, this.HTTP(i, !1)]) : (r.logError(["search query"]), [2, n]);
                        case 1:
                            return l = o.sent(), a = l.users, u = void 0 === a ? null : a, s = l.hashtags, c = void 0 === s ? null : s, d = l.places, v = void 0 === d ? null : d, [2, t(t({}, n), { media: { users: u, hashtags: c, places: v }, ok: Boolean(u || c || v) })]
                    }
                }))
            }))
        }, r
    }()
}();