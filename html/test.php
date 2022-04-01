<?php
include_once 'testhead.php';
?>

<body id="page-top">
  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= Inaki::path() ?>app">

        <div class="sidebar-brand-text mx-3">MetroBee <sup>TM</sup></div>
      </a>

      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="<?= Inaki::path() ?>app">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Store
      </div>

      <li class="nav-item active">
        <a class="nav-link" href="<?= Inaki::path(); ?>app/cstore?k=1">
          <i class="fa fa-fw fa-shopping-cart"></i>
          <span>Store</span>
        </a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        User profile
      </div>
      <li class="nav-item active">
        <a class="nav-link" href="<?= Inaki::path() ?>app/profile">
          <i class="fa fa-fw fa-user"></i>
          <span>User Profile</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fa fa-fw fa-edit"></i>
          <span>Edit Profile</span>
        </a>
      </li>

      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Account
      </div>
      <li class="nav-item active">
        <a class="nav-link" href="<?= Inaki::path() ?>app/practice">
          <i class="fa fa-fw fa-cubes"></i>
          <span>Practice</span>
        </a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="<?= Inaki::path() ?>app/buy">
          <i class="fa fa-fw fa-cog"></i>
          <span>Study material</span>
        </a>
      </li>



      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Preliminary
      </div>

      <li class="nav-item active">
        <a class="nav-link" href="<?= Inaki::path(); ?>app/play">
          <i class="fa fa-fw fa-play"></i>
          <span>Preliminary</span>
        </a>
      </li>



      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Regionals
      </div>

      <li class="nav-item active">
        <a class="nav-link" href="<?= Inaki::path(); ?>app/regions">
          <i class="fa fa-fw fa-play"></i>
          <span>Regionals</span>
        </a>
      </li>



      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        My Referrals
      </div>
      <li class="nav-item active">
        <a class="nav-link" href="<?= Inaki::path() ?>app/ref">
          <i class="fa fa-fw fa-users"></i>
          <span>Referrals</span>
        </a>
      </li>


      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link" href="<?= Inaki::path() ?>app?edeger=<?= token(); ?>">
          <i class="fa fa-fw fa-logout"></i>
          <span>Logout</span>
        </a>
      </li>


      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!--           Topbar Search 
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>-->

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <!--            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
               Dropdown - Messages 
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>-->




            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-dark"><?= ucwords($_SESSION['raws']['firstname'] . ' ' . $_SESSION['raws']['lastname']);  ?></span>
                <i class="fa fa-user-circle-o fa-2x"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= Inaki::path() ?>app/profile">
                  <i class="fa fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <!--                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>-->
                <a class="dropdown-item" href="<?= Inaki::path() ?>app/ref">
                  <i class="fa fa-users fa-sm fa-fw mr-2 text-gray-400"></i>
                  Referrals
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= Inaki::path() ?>app?edeger=<?= token(); ?>">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>

        <div class="container-fluid">
          <?php


          if (isset($routes[2])) {
            switch ($routes[2]) {
              case 'play':
                include_once('user/f1.php');


                break;

              case 'i':
                Inaki::render('user/f2');
                break;

              case 'practice':
                Inaki::render('user/practice');
                break;

              case 'buy':
                Inaki::render('user/study');
                break;
              case 'profile':
                Inaki::render('user/profile');
                break;
              case 'edit':
                Inaki::render('user/edit');
                break;

              case 'ref':
                Inaki::render('user/ref');
                break;


              case 'cstore':
                Inaki::render('user/store');
                break;

              default:
                include_once('user/ref.php');
                break;
            }
          } else {
          }



          ?>
        </div>


      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; <?= Inaki::app_name(); ?> <?= date('Y'); ?> Powered by <a>Crud Automated Systems</a></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>






  <script type="text/javascript">
    /*
 Copyright (C) Federico Zivolo 2017
 Distributed under the MIT License (license terms are at http://opensource.org/licenses/MIT).
 */
    (function(e, t) {
      'object' == typeof exports && 'undefined' != typeof module ? module.exports = t() : 'function' == typeof define && define.amd ? define(t) : e.Popper = t()
    })(this, function() {
      'use strict';

      function e(e) {
        return e && '[object Function]' === {}.toString.call(e)
      }

      function t(e, t) {
        if (1 !== e.nodeType) return [];
        var o = getComputedStyle(e, null);
        return t ? o[t] : o
      }

      function o(e) {
        return 'HTML' === e.nodeName ? e : e.parentNode || e.host
      }

      function n(e) {
        if (!e) return document.body;
        switch (e.nodeName) {
          case 'HTML':
          case 'BODY':
            return e.ownerDocument.body;
          case '#document':
            return e.body;
        }
        var i = t(e),
          r = i.overflow,
          p = i.overflowX,
          s = i.overflowY;
        return /(auto|scroll)/.test(r + s + p) ? e : n(o(e))
      }

      function r(e) {
        var o = e && e.offsetParent,
          i = o && o.nodeName;
        return i && 'BODY' !== i && 'HTML' !== i ? -1 !== ['TD', 'TABLE'].indexOf(o.nodeName) && 'static' === t(o, 'position') ? r(o) : o : e ? e.ownerDocument.documentElement : document.documentElement
      }

      function p(e) {
        var t = e.nodeName;
        return 'BODY' !== t && ('HTML' === t || r(e.firstElementChild) === e)
      }

      function s(e) {
        return null === e.parentNode ? e : s(e.parentNode)
      }

      function d(e, t) {
        if (!e || !e.nodeType || !t || !t.nodeType) return document.documentElement;
        var o = e.compareDocumentPosition(t) & Node.DOCUMENT_POSITION_FOLLOWING,
          i = o ? e : t,
          n = o ? t : e,
          a = document.createRange();
        a.setStart(i, 0), a.setEnd(n, 0);
        var l = a.commonAncestorContainer;
        if (e !== l && t !== l || i.contains(n)) return p(l) ? l : r(l);
        var f = s(e);
        return f.host ? d(f.host, t) : d(e, s(t).host)
      }

      function a(e) {
        var t = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : 'top',
          o = 'top' === t ? 'scrollTop' : 'scrollLeft',
          i = e.nodeName;
        if ('BODY' === i || 'HTML' === i) {
          var n = e.ownerDocument.documentElement,
            r = e.ownerDocument.scrollingElement || n;
          return r[o]
        }
        return e[o]
      }

      function l(e, t) {
        var o = 2 < arguments.length && void 0 !== arguments[2] && arguments[2],
          i = a(t, 'top'),
          n = a(t, 'left'),
          r = o ? -1 : 1;
        return e.top += i * r, e.bottom += i * r, e.left += n * r, e.right += n * r, e
      }

      function f(e, t) {
        var o = 'x' === t ? 'Left' : 'Top',
          i = 'Left' == o ? 'Right' : 'Bottom';
        return parseFloat(e['border' + o + 'Width'], 10) + parseFloat(e['border' + i + 'Width'], 10)
      }

      function m(e, t, o, i) {
        return J(t['offset' + e], t['scroll' + e], o['client' + e], o['offset' + e], o['scroll' + e], ie() ? o['offset' + e] + i['margin' + ('Height' === e ? 'Top' : 'Left')] + i['margin' + ('Height' === e ? 'Bottom' : 'Right')] : 0)
      }

      function h() {
        var e = document.body,
          t = document.documentElement,
          o = ie() && getComputedStyle(t);
        return {
          height: m('Height', e, t, o),
          width: m('Width', e, t, o)
        }
      }

      function c(e) {
        return se({}, e, {
          right: e.left + e.width,
          bottom: e.top + e.height
        })
      }

      function g(e) {
        var o = {};
        if (ie()) try {
          o = e.getBoundingClientRect();
          var i = a(e, 'top'),
            n = a(e, 'left');
          o.top += i, o.left += n, o.bottom += i, o.right += n
        } catch (e) {} else o = e.getBoundingClientRect();
        var r = {
            left: o.left,
            top: o.top,
            width: o.right - o.left,
            height: o.bottom - o.top
          },
          p = 'HTML' === e.nodeName ? h() : {},
          s = p.width || e.clientWidth || r.right - r.left,
          d = p.height || e.clientHeight || r.bottom - r.top,
          l = e.offsetWidth - s,
          m = e.offsetHeight - d;
        if (l || m) {
          var g = t(e);
          l -= f(g, 'x'), m -= f(g, 'y'), r.width -= l, r.height -= m
        }
        return c(r)
      }

      function u(e, o) {
        var i = ie(),
          r = 'HTML' === o.nodeName,
          p = g(e),
          s = g(o),
          d = n(e),
          a = t(o),
          f = parseFloat(a.borderTopWidth, 10),
          m = parseFloat(a.borderLeftWidth, 10),
          h = c({
            top: p.top - s.top - f,
            left: p.left - s.left - m,
            width: p.width,
            height: p.height
          });
        if (h.marginTop = 0, h.marginLeft = 0, !i && r) {
          var u = parseFloat(a.marginTop, 10),
            b = parseFloat(a.marginLeft, 10);
          h.top -= f - u, h.bottom -= f - u, h.left -= m - b, h.right -= m - b, h.marginTop = u, h.marginLeft = b
        }
        return (i ? o.contains(d) : o === d && 'BODY' !== d.nodeName) && (h = l(h, o)), h
      }

      function b(e) {
        var t = e.ownerDocument.documentElement,
          o = u(e, t),
          i = J(t.clientWidth, window.innerWidth || 0),
          n = J(t.clientHeight, window.innerHeight || 0),
          r = a(t),
          p = a(t, 'left'),
          s = {
            top: r - o.top + o.marginTop,
            left: p - o.left + o.marginLeft,
            width: i,
            height: n
          };
        return c(s)
      }

      function w(e) {
        var i = e.nodeName;
        return 'BODY' === i || 'HTML' === i ? !1 : 'fixed' === t(e, 'position') || w(o(e))
      }

      function y(e, t, i, r) {
        var p = {
            top: 0,
            left: 0
          },
          s = d(e, t);
        if ('viewport' === r) p = b(s);
        else {
          var a;
          'scrollParent' === r ? (a = n(o(t)), 'BODY' === a.nodeName && (a = e.ownerDocument.documentElement)) : 'window' === r ? a = e.ownerDocument.documentElement : a = r;
          var l = u(a, s);
          if ('HTML' === a.nodeName && !w(s)) {
            var f = h(),
              m = f.height,
              c = f.width;
            p.top += l.top - l.marginTop, p.bottom = m + l.top, p.left += l.left - l.marginLeft, p.right = c + l.left
          } else p = l
        }
        return p.left += i, p.top += i, p.right -= i, p.bottom -= i, p
      }

      function E(e) {
        var t = e.width,
          o = e.height;
        return t * o
      }

      function v(e, t, o, i, n) {
        var r = 5 < arguments.length && void 0 !== arguments[5] ? arguments[5] : 0;
        if (-1 === e.indexOf('auto')) return e;
        var p = y(o, i, r, n),
          s = {
            top: {
              width: p.width,
              height: t.top - p.top
            },
            right: {
              width: p.right - t.right,
              height: p.height
            },
            bottom: {
              width: p.width,
              height: p.bottom - t.bottom
            },
            left: {
              width: t.left - p.left,
              height: p.height
            }
          },
          d = Object.keys(s).map(function(e) {
            return se({
              key: e
            }, s[e], {
              area: E(s[e])
            })
          }).sort(function(e, t) {
            return t.area - e.area
          }),
          a = d.filter(function(e) {
            var t = e.width,
              i = e.height;
            return t >= o.clientWidth && i >= o.clientHeight
          }),
          l = 0 < a.length ? a[0].key : d[0].key,
          f = e.split('-')[1];
        return l + (f ? '-' + f : '')
      }

      function O(e, t, o) {
        var i = d(t, o);
        return u(o, i)
      }

      function L(e) {
        var t = getComputedStyle(e),
          o = parseFloat(t.marginTop) + parseFloat(t.marginBottom),
          i = parseFloat(t.marginLeft) + parseFloat(t.marginRight),
          n = {
            width: e.offsetWidth + i,
            height: e.offsetHeight + o
          };
        return n
      }

      function x(e) {
        var t = {
          left: 'right',
          right: 'left',
          bottom: 'top',
          top: 'bottom'
        };
        return e.replace(/left|right|bottom|top/g, function(e) {
          return t[e]
        })
      }

      function S(e, t, o) {
        o = o.split('-')[0];
        var i = L(e),
          n = {
            width: i.width,
            height: i.height
          },
          r = -1 !== ['right', 'left'].indexOf(o),
          p = r ? 'top' : 'left',
          s = r ? 'left' : 'top',
          d = r ? 'height' : 'width',
          a = r ? 'width' : 'height';
        return n[p] = t[p] + t[d] / 2 - i[d] / 2, n[s] = o === s ? t[s] - i[a] : t[x(s)], n
      }

      function T(e, t) {
        return Array.prototype.find ? e.find(t) : e.filter(t)[0]
      }

      function D(e, t, o) {
        if (Array.prototype.findIndex) return e.findIndex(function(e) {
          return e[t] === o
        });
        var i = T(e, function(e) {
          return e[t] === o
        });
        return e.indexOf(i)
      }

      function C(t, o, i) {
        var n = void 0 === i ? t : t.slice(0, D(t, 'name', i));
        return n.forEach(function(t) {
          t['function'] && console.warn('`modifier.function` is deprecated, use `modifier.fn`!');
          var i = t['function'] || t.fn;
          t.enabled && e(i) && (o.offsets.popper = c(o.offsets.popper), o.offsets.reference = c(o.offsets.reference), o = i(o, t))
        }), o
      }

      function N() {
        if (!this.state.isDestroyed) {
          var e = {
            instance: this,
            styles: {},
            arrowStyles: {},
            attributes: {},
            flipped: !1,
            offsets: {}
          };
          e.offsets.reference = O(this.state, this.popper, this.reference), e.placement = v(this.options.placement, e.offsets.reference, this.popper, this.reference, this.options.modifiers.flip.boundariesElement, this.options.modifiers.flip.padding), e.originalPlacement = e.placement, e.offsets.popper = S(this.popper, e.offsets.reference, e.placement), e.offsets.popper.position = 'absolute', e = C(this.modifiers, e), this.state.isCreated ? this.options.onUpdate(e) : (this.state.isCreated = !0, this.options.onCreate(e))
        }
      }

      function k(e, t) {
        return e.some(function(e) {
          var o = e.name,
            i = e.enabled;
          return i && o === t
        })
      }

      function W(e) {
        for (var t = [!1, 'ms', 'Webkit', 'Moz', 'O'], o = e.charAt(0).toUpperCase() + e.slice(1), n = 0; n < t.length - 1; n++) {
          var i = t[n],
            r = i ? '' + i + o : e;
          if ('undefined' != typeof document.body.style[r]) return r
        }
        return null
      }

      function P() {
        return this.state.isDestroyed = !0, k(this.modifiers, 'applyStyle') && (this.popper.removeAttribute('x-placement'), this.popper.style.left = '', this.popper.style.position = '', this.popper.style.top = '', this.popper.style[W('transform')] = ''), this.disableEventListeners(), this.options.removeOnDestroy && this.popper.parentNode.removeChild(this.popper), this
      }

      function B(e) {
        var t = e.ownerDocument;
        return t ? t.defaultView : window
      }

      function H(e, t, o, i) {
        var r = 'BODY' === e.nodeName,
          p = r ? e.ownerDocument.defaultView : e;
        p.addEventListener(t, o, {
          passive: !0
        }), r || H(n(p.parentNode), t, o, i), i.push(p)
      }

      function A(e, t, o, i) {
        o.updateBound = i, B(e).addEventListener('resize', o.updateBound, {
          passive: !0
        });
        var r = n(e);
        return H(r, 'scroll', o.updateBound, o.scrollParents), o.scrollElement = r, o.eventsEnabled = !0, o
      }

      function I() {
        this.state.eventsEnabled || (this.state = A(this.reference, this.options, this.state, this.scheduleUpdate))
      }

      function M(e, t) {
        return B(e).removeEventListener('resize', t.updateBound), t.scrollParents.forEach(function(e) {
          e.removeEventListener('scroll', t.updateBound)
        }), t.updateBound = null, t.scrollParents = [], t.scrollElement = null, t.eventsEnabled = !1, t
      }

      function R() {
        this.state.eventsEnabled && (cancelAnimationFrame(this.scheduleUpdate), this.state = M(this.reference, this.state))
      }

      function U(e) {
        return '' !== e && !isNaN(parseFloat(e)) && isFinite(e)
      }

      function Y(e, t) {
        Object.keys(t).forEach(function(o) {
          var i = ''; - 1 !== ['width', 'height', 'top', 'right', 'bottom', 'left'].indexOf(o) && U(t[o]) && (i = 'px'), e.style[o] = t[o] + i
        })
      }

      function j(e, t) {
        Object.keys(t).forEach(function(o) {
          var i = t[o];
          !1 === i ? e.removeAttribute(o) : e.setAttribute(o, t[o])
        })
      }

      function F(e, t, o) {
        var i = T(e, function(e) {
            var o = e.name;
            return o === t
          }),
          n = !!i && e.some(function(e) {
            return e.name === o && e.enabled && e.order < i.order
          });
        if (!n) {
          var r = '`' + t + '`';
          console.warn('`' + o + '`' + ' modifier is required by ' + r + ' modifier in order to work, be sure to include it before ' + r + '!')
        }
        return n
      }

      function K(e) {
        return 'end' === e ? 'start' : 'start' === e ? 'end' : e
      }

      function q(e) {
        var t = 1 < arguments.length && void 0 !== arguments[1] && arguments[1],
          o = ae.indexOf(e),
          i = ae.slice(o + 1).concat(ae.slice(0, o));
        return t ? i.reverse() : i
      }

      function V(e, t, o, i) {
        var n = e.match(/((?:\-|\+)?\d*\.?\d*)(.*)/),
          r = +n[1],
          p = n[2];
        if (!r) return e;
        if (0 === p.indexOf('%')) {
          var s;
          switch (p) {
            case '%p':
              s = o;
              break;
            case '%':
            case '%r':
            default:
              s = i;
          }
          var d = c(s);
          return d[t] / 100 * r
        }
        if ('vh' === p || 'vw' === p) {
          var a;
          return a = 'vh' === p ? J(document.documentElement.clientHeight, window.innerHeight || 0) : J(document.documentElement.clientWidth, window.innerWidth || 0), a / 100 * r
        }
        return r
      }

      function z(e, t, o, i) {
        var n = [0, 0],
          r = -1 !== ['right', 'left'].indexOf(i),
          p = e.split(/(\+|\-)/).map(function(e) {
            return e.trim()
          }),
          s = p.indexOf(T(p, function(e) {
            return -1 !== e.search(/,|\s/)
          }));
        p[s] && -1 === p[s].indexOf(',') && console.warn('Offsets separated by white space(s) are deprecated, use a comma (,) instead.');
        var d = /\s*,\s*|\s+/,
          a = -1 === s ? [p] : [p.slice(0, s).concat([p[s].split(d)[0]]), [p[s].split(d)[1]].concat(p.slice(s + 1))];
        return a = a.map(function(e, i) {
          var n = (1 === i ? !r : r) ? 'height' : 'width',
            p = !1;
          return e.reduce(function(e, t) {
            return '' === e[e.length - 1] && -1 !== ['+', '-'].indexOf(t) ? (e[e.length - 1] = t, p = !0, e) : p ? (e[e.length - 1] += t, p = !1, e) : e.concat(t)
          }, []).map(function(e) {
            return V(e, n, t, o)
          })
        }), a.forEach(function(e, t) {
          e.forEach(function(o, i) {
            U(o) && (n[t] += o * ('-' === e[i - 1] ? -1 : 1))
          })
        }), n
      }

      function G(e, t) {
        var o, i = t.offset,
          n = e.placement,
          r = e.offsets,
          p = r.popper,
          s = r.reference,
          d = n.split('-')[0];
        return o = U(+i) ? [+i, 0] : z(i, p, s, d), 'left' === d ? (p.top += o[0], p.left -= o[1]) : 'right' === d ? (p.top += o[0], p.left += o[1]) : 'top' === d ? (p.left += o[0], p.top -= o[1]) : 'bottom' === d && (p.left += o[0], p.top += o[1]), e.popper = p, e
      }
      for (var _ = Math.min, X = Math.floor, J = Math.max, Q = 'undefined' != typeof window && 'undefined' != typeof document, Z = ['Edge', 'Trident', 'Firefox'], $ = 0, ee = 0; ee < Z.length; ee += 1)
        if (Q && 0 <= navigator.userAgent.indexOf(Z[ee])) {
          $ = 1;
          break
        } var i, te = Q && window.Promise,
        oe = te ? function(e) {
          var t = !1;
          return function() {
            t || (t = !0, window.Promise.resolve().then(function() {
              t = !1, e()
            }))
          }
        } : function(e) {
          var t = !1;
          return function() {
            t || (t = !0, setTimeout(function() {
              t = !1, e()
            }, $))
          }
        },
        ie = function() {
          return void 0 == i && (i = -1 !== navigator.appVersion.indexOf('MSIE 10')), i
        },
        ne = function(e, t) {
          if (!(e instanceof t)) throw new TypeError('Cannot call a class as a function')
        },
        re = function() {
          function e(e, t) {
            for (var o, n = 0; n < t.length; n++) o = t[n], o.enumerable = o.enumerable || !1, o.configurable = !0, 'value' in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
          }
          return function(t, o, i) {
            return o && e(t.prototype, o), i && e(t, i), t
          }
        }(),
        pe = function(e, t, o) {
          return t in e ? Object.defineProperty(e, t, {
            value: o,
            enumerable: !0,
            configurable: !0,
            writable: !0
          }) : e[t] = o, e
        },
        se = Object.assign || function(e) {
          for (var t, o = 1; o < arguments.length; o++)
            for (var i in t = arguments[o], t) Object.prototype.hasOwnProperty.call(t, i) && (e[i] = t[i]);
          return e
        },
        de = ['auto-start', 'auto', 'auto-end', 'top-start', 'top', 'top-end', 'right-start', 'right', 'right-end', 'bottom-end', 'bottom', 'bottom-start', 'left-end', 'left', 'left-start'],
        ae = de.slice(3),
        le = {
          FLIP: 'flip',
          CLOCKWISE: 'clockwise',
          COUNTERCLOCKWISE: 'counterclockwise'
        },
        fe = function() {
          function t(o, i) {
            var n = this,
              r = 2 < arguments.length && void 0 !== arguments[2] ? arguments[2] : {};
            ne(this, t), this.scheduleUpdate = function() {
              return requestAnimationFrame(n.update)
            }, this.update = oe(this.update.bind(this)), this.options = se({}, t.Defaults, r), this.state = {
              isDestroyed: !1,
              isCreated: !1,
              scrollParents: []
            }, this.reference = o && o.jquery ? o[0] : o, this.popper = i && i.jquery ? i[0] : i, this.options.modifiers = {}, Object.keys(se({}, t.Defaults.modifiers, r.modifiers)).forEach(function(e) {
              n.options.modifiers[e] = se({}, t.Defaults.modifiers[e] || {}, r.modifiers ? r.modifiers[e] : {})
            }), this.modifiers = Object.keys(this.options.modifiers).map(function(e) {
              return se({
                name: e
              }, n.options.modifiers[e])
            }).sort(function(e, t) {
              return e.order - t.order
            }), this.modifiers.forEach(function(t) {
              t.enabled && e(t.onLoad) && t.onLoad(n.reference, n.popper, n.options, t, n.state)
            }), this.update();
            var p = this.options.eventsEnabled;
            p && this.enableEventListeners(), this.state.eventsEnabled = p
          }
          return re(t, [{
            key: 'update',
            value: function() {
              return N.call(this)
            }
          }, {
            key: 'destroy',
            value: function() {
              return P.call(this)
            }
          }, {
            key: 'enableEventListeners',
            value: function() {
              return I.call(this)
            }
          }, {
            key: 'disableEventListeners',
            value: function() {
              return R.call(this)
            }
          }]), t
        }();
      return fe.Utils = ('undefined' == typeof window ? global : window).PopperUtils, fe.placements = de, fe.Defaults = {
        placement: 'bottom',
        eventsEnabled: !0,
        removeOnDestroy: !1,
        onCreate: function() {},
        onUpdate: function() {},
        modifiers: {
          shift: {
            order: 100,
            enabled: !0,
            fn: function(e) {
              var t = e.placement,
                o = t.split('-')[0],
                i = t.split('-')[1];
              if (i) {
                var n = e.offsets,
                  r = n.reference,
                  p = n.popper,
                  s = -1 !== ['bottom', 'top'].indexOf(o),
                  d = s ? 'left' : 'top',
                  a = s ? 'width' : 'height',
                  l = {
                    start: pe({}, d, r[d]),
                    end: pe({}, d, r[d] + r[a] - p[a])
                  };
                e.offsets.popper = se({}, p, l[i])
              }
              return e
            }
          },
          offset: {
            order: 200,
            enabled: !0,
            fn: G,
            offset: 0
          },
          preventOverflow: {
            order: 300,
            enabled: !0,
            fn: function(e, t) {
              var o = t.boundariesElement || r(e.instance.popper);
              e.instance.reference === o && (o = r(o));
              var i = y(e.instance.popper, e.instance.reference, t.padding, o);
              t.boundaries = i;
              var n = t.priority,
                p = e.offsets.popper,
                s = {
                  primary: function(e) {
                    var o = p[e];
                    return p[e] < i[e] && !t.escapeWithReference && (o = J(p[e], i[e])), pe({}, e, o)
                  },
                  secondary: function(e) {
                    var o = 'right' === e ? 'left' : 'top',
                      n = p[o];
                    return p[e] > i[e] && !t.escapeWithReference && (n = _(p[o], i[e] - ('right' === e ? p.width : p.height))), pe({}, o, n)
                  }
                };
              return n.forEach(function(e) {
                var t = -1 === ['left', 'top'].indexOf(e) ? 'secondary' : 'primary';
                p = se({}, p, s[t](e))
              }), e.offsets.popper = p, e
            },
            priority: ['left', 'right', 'top', 'bottom'],
            padding: 5,
            boundariesElement: 'scrollParent'
          },
          keepTogether: {
            order: 400,
            enabled: !0,
            fn: function(e) {
              var t = e.offsets,
                o = t.popper,
                i = t.reference,
                n = e.placement.split('-')[0],
                r = X,
                p = -1 !== ['top', 'bottom'].indexOf(n),
                s = p ? 'right' : 'bottom',
                d = p ? 'left' : 'top',
                a = p ? 'width' : 'height';
              return o[s] < r(i[d]) && (e.offsets.popper[d] = r(i[d]) - o[a]), o[d] > r(i[s]) && (e.offsets.popper[d] = r(i[s])), e
            }
          },
          arrow: {
            order: 500,
            enabled: !0,
            fn: function(e, o) {
              var i;
              if (!F(e.instance.modifiers, 'arrow', 'keepTogether')) return e;
              var n = o.element;
              if ('string' == typeof n) {
                if (n = e.instance.popper.querySelector(n), !n) return e;
              } else if (!e.instance.popper.contains(n)) return console.warn('WARNING: `arrow.element` must be child of its popper element!'), e;
              var r = e.placement.split('-')[0],
                p = e.offsets,
                s = p.popper,
                d = p.reference,
                a = -1 !== ['left', 'right'].indexOf(r),
                l = a ? 'height' : 'width',
                f = a ? 'Top' : 'Left',
                m = f.toLowerCase(),
                h = a ? 'left' : 'top',
                g = a ? 'bottom' : 'right',
                u = L(n)[l];
              d[g] - u < s[m] && (e.offsets.popper[m] -= s[m] - (d[g] - u)), d[m] + u > s[g] && (e.offsets.popper[m] += d[m] + u - s[g]), e.offsets.popper = c(e.offsets.popper);
              var b = d[m] + d[l] / 2 - u / 2,
                w = t(e.instance.popper),
                y = parseFloat(w['margin' + f], 10),
                E = parseFloat(w['border' + f + 'Width'], 10),
                v = b - e.offsets.popper[m] - y - E;
              return v = J(_(s[l] - u, v), 0), e.arrowElement = n, e.offsets.arrow = (i = {}, pe(i, m, Math.round(v)), pe(i, h, ''), i), e
            },
            element: '[x-arrow]'
          },
          flip: {
            order: 600,
            enabled: !0,
            fn: function(e, t) {
              if (k(e.instance.modifiers, 'inner')) return e;
              if (e.flipped && e.placement === e.originalPlacement) return e;
              var o = y(e.instance.popper, e.instance.reference, t.padding, t.boundariesElement),
                i = e.placement.split('-')[0],
                n = x(i),
                r = e.placement.split('-')[1] || '',
                p = [];
              switch (t.behavior) {
                case le.FLIP:
                  p = [i, n];
                  break;
                case le.CLOCKWISE:
                  p = q(i);
                  break;
                case le.COUNTERCLOCKWISE:
                  p = q(i, !0);
                  break;
                default:
                  p = t.behavior;
              }
              return p.forEach(function(s, d) {
                if (i !== s || p.length === d + 1) return e;
                i = e.placement.split('-')[0], n = x(i);
                var a = e.offsets.popper,
                  l = e.offsets.reference,
                  f = X,
                  m = 'left' === i && f(a.right) > f(l.left) || 'right' === i && f(a.left) < f(l.right) || 'top' === i && f(a.bottom) > f(l.top) || 'bottom' === i && f(a.top) < f(l.bottom),
                  h = f(a.left) < f(o.left),
                  c = f(a.right) > f(o.right),
                  g = f(a.top) < f(o.top),
                  u = f(a.bottom) > f(o.bottom),
                  b = 'left' === i && h || 'right' === i && c || 'top' === i && g || 'bottom' === i && u,
                  w = -1 !== ['top', 'bottom'].indexOf(i),
                  y = !!t.flipVariations && (w && 'start' === r && h || w && 'end' === r && c || !w && 'start' === r && g || !w && 'end' === r && u);
                (m || b || y) && (e.flipped = !0, (m || b) && (i = p[d + 1]), y && (r = K(r)), e.placement = i + (r ? '-' + r : ''), e.offsets.popper = se({}, e.offsets.popper, S(e.instance.popper, e.offsets.reference, e.placement)), e = C(e.instance.modifiers, e, 'flip'))
              }), e
            },
            behavior: 'flip',
            padding: 5,
            boundariesElement: 'viewport'
          },
          inner: {
            order: 700,
            enabled: !1,
            fn: function(e) {
              var t = e.placement,
                o = t.split('-')[0],
                i = e.offsets,
                n = i.popper,
                r = i.reference,
                p = -1 !== ['left', 'right'].indexOf(o),
                s = -1 === ['top', 'left'].indexOf(o);
              return n[p ? 'left' : 'top'] = r[o] - (s ? n[p ? 'width' : 'height'] : 0), e.placement = x(t), e.offsets.popper = c(n), e
            }
          },
          hide: {
            order: 800,
            enabled: !0,
            fn: function(e) {
              if (!F(e.instance.modifiers, 'hide', 'preventOverflow')) return e;
              var t = e.offsets.reference,
                o = T(e.instance.modifiers, function(e) {
                  return 'preventOverflow' === e.name
                }).boundaries;
              if (t.bottom < o.top || t.left > o.right || t.top > o.bottom || t.right < o.left) {
                if (!0 === e.hide) return e;
                e.hide = !0, e.attributes['x-out-of-boundaries'] = ''
              } else {
                if (!1 === e.hide) return e;
                e.hide = !1, e.attributes['x-out-of-boundaries'] = !1
              }
              return e
            }
          },
          computeStyle: {
            order: 850,
            enabled: !0,
            fn: function(e, t) {
              var o = t.x,
                i = t.y,
                n = e.offsets.popper,
                p = T(e.instance.modifiers, function(e) {
                  return 'applyStyle' === e.name
                }).gpuAcceleration;
              void 0 !== p && console.warn('WARNING: `gpuAcceleration` option moved to `computeStyle` modifier and will not be supported in future versions of Popper.js!');
              var s, d, a = void 0 === p ? t.gpuAcceleration : p,
                l = r(e.instance.popper),
                f = g(l),
                m = {
                  position: n.position
                },
                h = {
                  left: X(n.left),
                  top: X(n.top),
                  bottom: X(n.bottom),
                  right: X(n.right)
                },
                c = 'bottom' === o ? 'top' : 'bottom',
                u = 'right' === i ? 'left' : 'right',
                b = W('transform');
              if (d = 'bottom' == c ? -f.height + h.bottom : h.top, s = 'right' == u ? -f.width + h.right : h.left, a && b) m[b] = 'translate3d(' + s + 'px, ' + d + 'px, 0)', m[c] = 0, m[u] = 0, m.willChange = 'transform';
              else {
                var w = 'bottom' == c ? -1 : 1,
                  y = 'right' == u ? -1 : 1;
                m[c] = d * w, m[u] = s * y, m.willChange = c + ', ' + u
              }
              var E = {
                "x-placement": e.placement
              };
              return e.attributes = se({}, E, e.attributes), e.styles = se({}, m, e.styles), e.arrowStyles = se({}, e.offsets.arrow, e.arrowStyles), e
            },
            gpuAcceleration: !0,
            x: 'bottom',
            y: 'right'
          },
          applyStyle: {
            order: 900,
            enabled: !0,
            fn: function(e) {
              return Y(e.instance.popper, e.styles), j(e.instance.popper, e.attributes), e.arrowElement && Object.keys(e.arrowStyles).length && Y(e.arrowElement, e.arrowStyles), e
            },
            onLoad: function(e, t, o, i, n) {
              var r = O(n, t, e),
                p = v(o.placement, r, t, e, o.modifiers.flip.boundariesElement, o.modifiers.flip.padding);
              return t.setAttribute('x-placement', p), Y(t, {
                position: 'absolute'
              }), o
            },
            gpuAcceleration: void 0
          }
        }
      }, fe
    });



    /*!
     * Bootstrap v4.0.0 (https://getbootstrap.com)
     * Copyright 2011-2018 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
     * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
     */
    ! function(t, e) {
      "object" == typeof exports && "undefined" != typeof module ? e(exports, require("jquery"), require("popper.js")) : "function" == typeof define && define.amd ? define(["exports", "jquery", "popper.js"], e) : e(t.bootstrap = {}, t.jQuery, t.Popper)
    }(this, function(t, e, n) {
      "use strict";

      function i(t, e) {
        for (var n = 0; n < e.length; n++) {
          var i = e[n];
          i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
        }
      }

      function s(t, e, n) {
        return e && i(t.prototype, e), n && i(t, n), t
      }

      function r() {
        return (r = Object.assign || function(t) {
          for (var e = 1; e < arguments.length; e++) {
            var n = arguments[e];
            for (var i in n) Object.prototype.hasOwnProperty.call(n, i) && (t[i] = n[i])
          }
          return t
        }).apply(this, arguments)
      }
      e = e && e.hasOwnProperty("default") ? e.default : e, n = n && n.hasOwnProperty("default") ? n.default : n;
      var o, a, l, h, c, u, f, d, _, g, p, m, v, E, T, y, C, I, A, b, D, S, w, N, O, k, P = function(t) {
          var e = !1;

          function n(e) {
            var n = this,
              s = !1;
            return t(this).one(i.TRANSITION_END, function() {
              s = !0
            }), setTimeout(function() {
              s || i.triggerTransitionEnd(n)
            }, e), this
          }
          var i = {
            TRANSITION_END: "bsTransitionEnd",
            getUID: function(t) {
              do {
                t += ~~(1e6 * Math.random())
              } while (document.getElementById(t));
              return t
            },
            getSelectorFromElement: function(e) {
              var n, i = e.getAttribute("data-target");
              i && "#" !== i || (i = e.getAttribute("href") || ""), "#" === i.charAt(0) && (n = i, i = n = "function" == typeof t.escapeSelector ? t.escapeSelector(n).substr(1) : n.replace(/(:|\.|\[|\]|,|=|@)/g, "\\$1"));
              try {
                return t(document).find(i).length > 0 ? i : null
              } catch (t) {
                return null
              }
            },
            reflow: function(t) {
              return t.offsetHeight
            },
            triggerTransitionEnd: function(n) {
              t(n).trigger(e.end)
            },
            supportsTransitionEnd: function() {
              return Boolean(e)
            },
            isElement: function(t) {
              return (t[0] || t).nodeType
            },
            typeCheckConfig: function(t, e, n) {
              for (var s in n)
                if (Object.prototype.hasOwnProperty.call(n, s)) {
                  var r = n[s],
                    o = e[s],
                    a = o && i.isElement(o) ? "element" : (l = o, {}.toString.call(l).match(/\s([a-zA-Z]+)/)[1].toLowerCase());
                  if (!new RegExp(r).test(a)) throw new Error(t.toUpperCase() + ': Option "' + s + '" provided type "' + a + '" but expected type "' + r + '".')
                } var l
            }
          };
          return e = ("undefined" == typeof window || !window.QUnit) && {
            end: "transitionend"
          }, t.fn.emulateTransitionEnd = n, i.supportsTransitionEnd() && (t.event.special[i.TRANSITION_END] = {
            bindType: e.end,
            delegateType: e.end,
            handle: function(e) {
              if (t(e.target).is(this)) return e.handleObj.handler.apply(this, arguments)
            }
          }), i
        }(e),
        L = (a = "alert", h = "." + (l = "bs.alert"), c = (o = e).fn[a], u = {
          CLOSE: "close" + h,
          CLOSED: "closed" + h,
          CLICK_DATA_API: "click" + h + ".data-api"
        }, f = "alert", d = "fade", _ = "show", g = function() {
          function t(t) {
            this._element = t
          }
          var e = t.prototype;
          return e.close = function(t) {
            t = t || this._element;
            var e = this._getRootElement(t);
            this._triggerCloseEvent(e).isDefaultPrevented() || this._removeElement(e)
          }, e.dispose = function() {
            o.removeData(this._element, l), this._element = null
          }, e._getRootElement = function(t) {
            var e = P.getSelectorFromElement(t),
              n = !1;
            return e && (n = o(e)[0]), n || (n = o(t).closest("." + f)[0]), n
          }, e._triggerCloseEvent = function(t) {
            var e = o.Event(u.CLOSE);
            return o(t).trigger(e), e
          }, e._removeElement = function(t) {
            var e = this;
            o(t).removeClass(_), P.supportsTransitionEnd() && o(t).hasClass(d) ? o(t).one(P.TRANSITION_END, function(n) {
              return e._destroyElement(t, n)
            }).emulateTransitionEnd(150) : this._destroyElement(t)
          }, e._destroyElement = function(t) {
            o(t).detach().trigger(u.CLOSED).remove()
          }, t._jQueryInterface = function(e) {
            return this.each(function() {
              var n = o(this),
                i = n.data(l);
              i || (i = new t(this), n.data(l, i)), "close" === e && i[e](this)
            })
          }, t._handleDismiss = function(t) {
            return function(e) {
              e && e.preventDefault(), t.close(this)
            }
          }, s(t, null, [{
            key: "VERSION",
            get: function() {
              return "4.0.0"
            }
          }]), t
        }(), o(document).on(u.CLICK_DATA_API, '[data-dismiss="alert"]', g._handleDismiss(new g)), o.fn[a] = g._jQueryInterface, o.fn[a].Constructor = g, o.fn[a].noConflict = function() {
          return o.fn[a] = c, g._jQueryInterface
        }, g),
        R = (m = "button", E = "." + (v = "bs.button"), T = ".data-api", y = (p = e).fn[m], C = "active", I = "btn", A = "focus", b = '[data-toggle^="button"]', D = '[data-toggle="buttons"]', S = "input", w = ".active", N = ".btn", O = {
          CLICK_DATA_API: "click" + E + T,
          FOCUS_BLUR_DATA_API: "focus" + E + T + " blur" + E + T
        }, k = function() {
          function t(t) {
            this._element = t
          }
          var e = t.prototype;
          return e.toggle = function() {
            var t = !0,
              e = !0,
              n = p(this._element).closest(D)[0];
            if (n) {
              var i = p(this._element).find(S)[0];
              if (i) {
                if ("radio" === i.type)
                  if (i.checked && p(this._element).hasClass(C)) t = !1;
                  else {
                    var s = p(n).find(w)[0];
                    s && p(s).removeClass(C)
                  } if (t) {
                  if (i.hasAttribute("disabled") || n.hasAttribute("disabled") || i.classList.contains("disabled") || n.classList.contains("disabled")) return;
                  i.checked = !p(this._element).hasClass(C), p(i).trigger("change")
                }
                i.focus(), e = !1
              }
            }
            e && this._element.setAttribute("aria-pressed", !p(this._element).hasClass(C)), t && p(this._element).toggleClass(C)
          }, e.dispose = function() {
            p.removeData(this._element, v), this._element = null
          }, t._jQueryInterface = function(e) {
            return this.each(function() {
              var n = p(this).data(v);
              n || (n = new t(this), p(this).data(v, n)), "toggle" === e && n[e]()
            })
          }, s(t, null, [{
            key: "VERSION",
            get: function() {
              return "4.0.0"
            }
          }]), t
        }(), p(document).on(O.CLICK_DATA_API, b, function(t) {
          t.preventDefault();
          var e = t.target;
          p(e).hasClass(I) || (e = p(e).closest(N)), k._jQueryInterface.call(p(e), "toggle")
        }).on(O.FOCUS_BLUR_DATA_API, b, function(t) {
          var e = p(t.target).closest(N)[0];
          p(e).toggleClass(A, /^focus(in)?$/.test(t.type))
        }), p.fn[m] = k._jQueryInterface, p.fn[m].Constructor = k, p.fn[m].noConflict = function() {
          return p.fn[m] = y, k._jQueryInterface
        }, k),
        j = function(t) {
          var e = "carousel",
            n = "bs.carousel",
            i = "." + n,
            o = t.fn[e],
            a = {
              interval: 5e3,
              keyboard: !0,
              slide: !1,
              pause: "hover",
              wrap: !0
            },
            l = {
              interval: "(number|boolean)",
              keyboard: "boolean",
              slide: "(boolean|string)",
              pause: "(string|boolean)",
              wrap: "boolean"
            },
            h = "next",
            c = "prev",
            u = "left",
            f = "right",
            d = {
              SLIDE: "slide" + i,
              SLID: "slid" + i,
              KEYDOWN: "keydown" + i,
              MOUSEENTER: "mouseenter" + i,
              MOUSELEAVE: "mouseleave" + i,
              TOUCHEND: "touchend" + i,
              LOAD_DATA_API: "load" + i + ".data-api",
              CLICK_DATA_API: "click" + i + ".data-api"
            },
            _ = "carousel",
            g = "active",
            p = "slide",
            m = "carousel-item-right",
            v = "carousel-item-left",
            E = "carousel-item-next",
            T = "carousel-item-prev",
            y = {
              ACTIVE: ".active",
              ACTIVE_ITEM: ".active.carousel-item",
              ITEM: ".carousel-item",
              NEXT_PREV: ".carousel-item-next, .carousel-item-prev",
              INDICATORS: ".carousel-indicators",
              DATA_SLIDE: "[data-slide], [data-slide-to]",
              DATA_RIDE: '[data-ride="carousel"]'
            },
            C = function() {
              function o(e, n) {
                this._items = null, this._interval = null, this._activeElement = null, this._isPaused = !1, this._isSliding = !1, this.touchTimeout = null, this._config = this._getConfig(n), this._element = t(e)[0], this._indicatorsElement = t(this._element).find(y.INDICATORS)[0], this._addEventListeners()
              }
              var C = o.prototype;
              return C.next = function() {
                this._isSliding || this._slide(h)
              }, C.nextWhenVisible = function() {
                !document.hidden && t(this._element).is(":visible") && "hidden" !== t(this._element).css("visibility") && this.next()
              }, C.prev = function() {
                this._isSliding || this._slide(c)
              }, C.pause = function(e) {
                e || (this._isPaused = !0), t(this._element).find(y.NEXT_PREV)[0] && P.supportsTransitionEnd() && (P.triggerTransitionEnd(this._element), this.cycle(!0)), clearInterval(this._interval), this._interval = null
              }, C.cycle = function(t) {
                t || (this._isPaused = !1), this._interval && (clearInterval(this._interval), this._interval = null), this._config.interval && !this._isPaused && (this._interval = setInterval((document.visibilityState ? this.nextWhenVisible : this.next).bind(this), this._config.interval))
              }, C.to = function(e) {
                var n = this;
                this._activeElement = t(this._element).find(y.ACTIVE_ITEM)[0];
                var i = this._getItemIndex(this._activeElement);
                if (!(e > this._items.length - 1 || e < 0))
                  if (this._isSliding) t(this._element).one(d.SLID, function() {
                    return n.to(e)
                  });
                  else {
                    if (i === e) return this.pause(), void this.cycle();
                    var s = e > i ? h : c;
                    this._slide(s, this._items[e])
                  }
              }, C.dispose = function() {
                t(this._element).off(i), t.removeData(this._element, n), this._items = null, this._config = null, this._element = null, this._interval = null, this._isPaused = null, this._isSliding = null, this._activeElement = null, this._indicatorsElement = null
              }, C._getConfig = function(t) {
                return t = r({}, a, t), P.typeCheckConfig(e, t, l), t
              }, C._addEventListeners = function() {
                var e = this;
                this._config.keyboard && t(this._element).on(d.KEYDOWN, function(t) {
                  return e._keydown(t)
                }), "hover" === this._config.pause && (t(this._element).on(d.MOUSEENTER, function(t) {
                  return e.pause(t)
                }).on(d.MOUSELEAVE, function(t) {
                  return e.cycle(t)
                }), "ontouchstart" in document.documentElement && t(this._element).on(d.TOUCHEND, function() {
                  e.pause(), e.touchTimeout && clearTimeout(e.touchTimeout), e.touchTimeout = setTimeout(function(t) {
                    return e.cycle(t)
                  }, 500 + e._config.interval)
                }))
              }, C._keydown = function(t) {
                if (!/input|textarea/i.test(t.target.tagName)) switch (t.which) {
                  case 37:
                    t.preventDefault(), this.prev();
                    break;
                  case 39:
                    t.preventDefault(), this.next()
                }
              }, C._getItemIndex = function(e) {
                return this._items = t.makeArray(t(e).parent().find(y.ITEM)), this._items.indexOf(e)
              }, C._getItemByDirection = function(t, e) {
                var n = t === h,
                  i = t === c,
                  s = this._getItemIndex(e),
                  r = this._items.length - 1;
                if ((i && 0 === s || n && s === r) && !this._config.wrap) return e;
                var o = (s + (t === c ? -1 : 1)) % this._items.length;
                return -1 === o ? this._items[this._items.length - 1] : this._items[o]
              }, C._triggerSlideEvent = function(e, n) {
                var i = this._getItemIndex(e),
                  s = this._getItemIndex(t(this._element).find(y.ACTIVE_ITEM)[0]),
                  r = t.Event(d.SLIDE, {
                    relatedTarget: e,
                    direction: n,
                    from: s,
                    to: i
                  });
                return t(this._element).trigger(r), r
              }, C._setActiveIndicatorElement = function(e) {
                if (this._indicatorsElement) {
                  t(this._indicatorsElement).find(y.ACTIVE).removeClass(g);
                  var n = this._indicatorsElement.children[this._getItemIndex(e)];
                  n && t(n).addClass(g)
                }
              }, C._slide = function(e, n) {
                var i, s, r, o = this,
                  a = t(this._element).find(y.ACTIVE_ITEM)[0],
                  l = this._getItemIndex(a),
                  c = n || a && this._getItemByDirection(e, a),
                  _ = this._getItemIndex(c),
                  C = Boolean(this._interval);
                if (e === h ? (i = v, s = E, r = u) : (i = m, s = T, r = f), c && t(c).hasClass(g)) this._isSliding = !1;
                else if (!this._triggerSlideEvent(c, r).isDefaultPrevented() && a && c) {
                  this._isSliding = !0, C && this.pause(), this._setActiveIndicatorElement(c);
                  var I = t.Event(d.SLID, {
                    relatedTarget: c,
                    direction: r,
                    from: l,
                    to: _
                  });
                  P.supportsTransitionEnd() && t(this._element).hasClass(p) ? (t(c).addClass(s), P.reflow(c), t(a).addClass(i), t(c).addClass(i), t(a).one(P.TRANSITION_END, function() {
                    t(c).removeClass(i + " " + s).addClass(g), t(a).removeClass(g + " " + s + " " + i), o._isSliding = !1, setTimeout(function() {
                      return t(o._element).trigger(I)
                    }, 0)
                  }).emulateTransitionEnd(600)) : (t(a).removeClass(g), t(c).addClass(g), this._isSliding = !1, t(this._element).trigger(I)), C && this.cycle()
                }
              }, o._jQueryInterface = function(e) {
                return this.each(function() {
                  var i = t(this).data(n),
                    s = r({}, a, t(this).data());
                  "object" == typeof e && (s = r({}, s, e));
                  var l = "string" == typeof e ? e : s.slide;
                  if (i || (i = new o(this, s), t(this).data(n, i)), "number" == typeof e) i.to(e);
                  else if ("string" == typeof l) {
                    if ("undefined" == typeof i[l]) throw new TypeError('No method named "' + l + '"');
                    i[l]()
                  } else s.interval && (i.pause(), i.cycle())
                })
              }, o._dataApiClickHandler = function(e) {
                var i = P.getSelectorFromElement(this);
                if (i) {
                  var s = t(i)[0];
                  if (s && t(s).hasClass(_)) {
                    var a = r({}, t(s).data(), t(this).data()),
                      l = this.getAttribute("data-slide-to");
                    l && (a.interval = !1), o._jQueryInterface.call(t(s), a), l && t(s).data(n).to(l), e.preventDefault()
                  }
                }
              }, s(o, null, [{
                key: "VERSION",
                get: function() {
                  return "4.0.0"
                }
              }, {
                key: "Default",
                get: function() {
                  return a
                }
              }]), o
            }();
          return t(document).on(d.CLICK_DATA_API, y.DATA_SLIDE, C._dataApiClickHandler), t(window).on(d.LOAD_DATA_API, function() {
            t(y.DATA_RIDE).each(function() {
              var e = t(this);
              C._jQueryInterface.call(e, e.data())
            })
          }), t.fn[e] = C._jQueryInterface, t.fn[e].Constructor = C, t.fn[e].noConflict = function() {
            return t.fn[e] = o, C._jQueryInterface
          }, C
        }(e),
        H = function(t) {
          var e = "collapse",
            n = "bs.collapse",
            i = "." + n,
            o = t.fn[e],
            a = {
              toggle: !0,
              parent: ""
            },
            l = {
              toggle: "boolean",
              parent: "(string|element)"
            },
            h = {
              SHOW: "show" + i,
              SHOWN: "shown" + i,
              HIDE: "hide" + i,
              HIDDEN: "hidden" + i,
              CLICK_DATA_API: "click" + i + ".data-api"
            },
            c = "show",
            u = "collapse",
            f = "collapsing",
            d = "collapsed",
            _ = "width",
            g = "height",
            p = {
              ACTIVES: ".show, .collapsing",
              DATA_TOGGLE: '[data-toggle="collapse"]'
            },
            m = function() {
              function i(e, n) {
                this._isTransitioning = !1, this._element = e, this._config = this._getConfig(n), this._triggerArray = t.makeArray(t('[data-toggle="collapse"][href="#' + e.id + '"],[data-toggle="collapse"][data-target="#' + e.id + '"]'));
                for (var i = t(p.DATA_TOGGLE), s = 0; s < i.length; s++) {
                  var r = i[s],
                    o = P.getSelectorFromElement(r);
                  null !== o && t(o).filter(e).length > 0 && (this._selector = o, this._triggerArray.push(r))
                }
                this._parent = this._config.parent ? this._getParent() : null, this._config.parent || this._addAriaAndCollapsedClass(this._element, this._triggerArray), this._config.toggle && this.toggle()
              }
              var o = i.prototype;
              return o.toggle = function() {
                t(this._element).hasClass(c) ? this.hide() : this.show()
              }, o.show = function() {
                var e, s, r = this;
                if (!this._isTransitioning && !t(this._element).hasClass(c) && (this._parent && 0 === (e = t.makeArray(t(this._parent).find(p.ACTIVES).filter('[data-parent="' + this._config.parent + '"]'))).length && (e = null), !(e && (s = t(e).not(this._selector).data(n)) && s._isTransitioning))) {
                  var o = t.Event(h.SHOW);
                  if (t(this._element).trigger(o), !o.isDefaultPrevented()) {
                    e && (i._jQueryInterface.call(t(e).not(this._selector), "hide"), s || t(e).data(n, null));
                    var a = this._getDimension();
                    t(this._element).removeClass(u).addClass(f), this._element.style[a] = 0, this._triggerArray.length > 0 && t(this._triggerArray).removeClass(d).attr("aria-expanded", !0), this.setTransitioning(!0);
                    var l = function() {
                      t(r._element).removeClass(f).addClass(u).addClass(c), r._element.style[a] = "", r.setTransitioning(!1), t(r._element).trigger(h.SHOWN)
                    };
                    if (P.supportsTransitionEnd()) {
                      var _ = "scroll" + (a[0].toUpperCase() + a.slice(1));
                      t(this._element).one(P.TRANSITION_END, l).emulateTransitionEnd(600), this._element.style[a] = this._element[_] + "px"
                    } else l()
                  }
                }
              }, o.hide = function() {
                var e = this;
                if (!this._isTransitioning && t(this._element).hasClass(c)) {
                  var n = t.Event(h.HIDE);
                  if (t(this._element).trigger(n), !n.isDefaultPrevented()) {
                    var i = this._getDimension();
                    if (this._element.style[i] = this._element.getBoundingClientRect()[i] + "px", P.reflow(this._element), t(this._element).addClass(f).removeClass(u).removeClass(c), this._triggerArray.length > 0)
                      for (var s = 0; s < this._triggerArray.length; s++) {
                        var r = this._triggerArray[s],
                          o = P.getSelectorFromElement(r);
                        if (null !== o) t(o).hasClass(c) || t(r).addClass(d).attr("aria-expanded", !1)
                      }
                    this.setTransitioning(!0);
                    var a = function() {
                      e.setTransitioning(!1), t(e._element).removeClass(f).addClass(u).trigger(h.HIDDEN)
                    };
                    this._element.style[i] = "", P.supportsTransitionEnd() ? t(this._element).one(P.TRANSITION_END, a).emulateTransitionEnd(600) : a()
                  }
                }
              }, o.setTransitioning = function(t) {
                this._isTransitioning = t
              }, o.dispose = function() {
                t.removeData(this._element, n), this._config = null, this._parent = null, this._element = null, this._triggerArray = null, this._isTransitioning = null
              }, o._getConfig = function(t) {
                return (t = r({}, a, t)).toggle = Boolean(t.toggle), P.typeCheckConfig(e, t, l), t
              }, o._getDimension = function() {
                return t(this._element).hasClass(_) ? _ : g
              }, o._getParent = function() {
                var e = this,
                  n = null;
                P.isElement(this._config.parent) ? (n = this._config.parent, "undefined" != typeof this._config.parent.jquery && (n = this._config.parent[0])) : n = t(this._config.parent)[0];
                var s = '[data-toggle="collapse"][data-parent="' + this._config.parent + '"]';
                return t(n).find(s).each(function(t, n) {
                  e._addAriaAndCollapsedClass(i._getTargetFromElement(n), [n])
                }), n
              }, o._addAriaAndCollapsedClass = function(e, n) {
                if (e) {
                  var i = t(e).hasClass(c);
                  n.length > 0 && t(n).toggleClass(d, !i).attr("aria-expanded", i)
                }
              }, i._getTargetFromElement = function(e) {
                var n = P.getSelectorFromElement(e);
                return n ? t(n)[0] : null
              }, i._jQueryInterface = function(e) {
                return this.each(function() {
                  var s = t(this),
                    o = s.data(n),
                    l = r({}, a, s.data(), "object" == typeof e && e);
                  if (!o && l.toggle && /show|hide/.test(e) && (l.toggle = !1), o || (o = new i(this, l), s.data(n, o)), "string" == typeof e) {
                    if ("undefined" == typeof o[e]) throw new TypeError('No method named "' + e + '"');
                    o[e]()
                  }
                })
              }, s(i, null, [{
                key: "VERSION",
                get: function() {
                  return "4.0.0"
                }
              }, {
                key: "Default",
                get: function() {
                  return a
                }
              }]), i
            }();
          return t(document).on(h.CLICK_DATA_API, p.DATA_TOGGLE, function(e) {
            "A" === e.currentTarget.tagName && e.preventDefault();
            var i = t(this),
              s = P.getSelectorFromElement(this);
            t(s).each(function() {
              var e = t(this),
                s = e.data(n) ? "toggle" : i.data();
              m._jQueryInterface.call(e, s)
            })
          }), t.fn[e] = m._jQueryInterface, t.fn[e].Constructor = m, t.fn[e].noConflict = function() {
            return t.fn[e] = o, m._jQueryInterface
          }, m
        }(e),
        W = function(t) {
          var e = "dropdown",
            i = "bs.dropdown",
            o = "." + i,
            a = ".data-api",
            l = t.fn[e],
            h = new RegExp("38|40|27"),
            c = {
              HIDE: "hide" + o,
              HIDDEN: "hidden" + o,
              SHOW: "show" + o,
              SHOWN: "shown" + o,
              CLICK: "click" + o,
              CLICK_DATA_API: "click" + o + a,
              KEYDOWN_DATA_API: "keydown" + o + a,
              KEYUP_DATA_API: "keyup" + o + a
            },
            u = "disabled",
            f = "show",
            d = "dropup",
            _ = "dropright",
            g = "dropleft",
            p = "dropdown-menu-right",
            m = "dropdown-menu-left",
            v = "position-static",
            E = '[data-toggle="dropdown"]',
            T = ".dropdown form",
            y = ".dropdown-menu",
            C = ".navbar-nav",
            I = ".dropdown-menu .dropdown-item:not(.disabled)",
            A = "top-start",
            b = "top-end",
            D = "bottom-start",
            S = "bottom-end",
            w = "right-start",
            N = "left-start",
            O = {
              offset: 0,
              flip: !0,
              boundary: "scrollParent"
            },
            k = {
              offset: "(number|string|function)",
              flip: "boolean",
              boundary: "(string|element)"
            },
            L = function() {
              function a(t, e) {
                this._element = t, this._popper = null, this._config = this._getConfig(e), this._menu = this._getMenuElement(), this._inNavbar = this._detectNavbar(), this._addEventListeners()
              }
              var l = a.prototype;
              return l.toggle = function() {
                if (!this._element.disabled && !t(this._element).hasClass(u)) {
                  var e = a._getParentFromElement(this._element),
                    i = t(this._menu).hasClass(f);
                  if (a._clearMenus(), !i) {
                    var s = {
                        relatedTarget: this._element
                      },
                      r = t.Event(c.SHOW, s);
                    if (t(e).trigger(r), !r.isDefaultPrevented()) {
                      if (!this._inNavbar) {
                        if ("undefined" == typeof n) throw new TypeError("Bootstrap dropdown require Popper.js (https://popper.js.org)");
                        var o = this._element;
                        t(e).hasClass(d) && (t(this._menu).hasClass(m) || t(this._menu).hasClass(p)) && (o = e), "scrollParent" !== this._config.boundary && t(e).addClass(v), this._popper = new n(o, this._menu, this._getPopperConfig())
                      }
                      "ontouchstart" in document.documentElement && 0 === t(e).closest(C).length && t("body").children().on("mouseover", null, t.noop), this._element.focus(), this._element.setAttribute("aria-expanded", !0), t(this._menu).toggleClass(f), t(e).toggleClass(f).trigger(t.Event(c.SHOWN, s))
                    }
                  }
                }
              }, l.dispose = function() {
                t.removeData(this._element, i), t(this._element).off(o), this._element = null, this._menu = null, null !== this._popper && (this._popper.destroy(), this._popper = null)
              }, l.update = function() {
                this._inNavbar = this._detectNavbar(), null !== this._popper && this._popper.scheduleUpdate()
              }, l._addEventListeners = function() {
                var e = this;
                t(this._element).on(c.CLICK, function(t) {
                  t.preventDefault(), t.stopPropagation(), e.toggle()
                })
              }, l._getConfig = function(n) {
                return n = r({}, this.constructor.Default, t(this._element).data(), n), P.typeCheckConfig(e, n, this.constructor.DefaultType), n
              }, l._getMenuElement = function() {
                if (!this._menu) {
                  var e = a._getParentFromElement(this._element);
                  this._menu = t(e).find(y)[0]
                }
                return this._menu
              }, l._getPlacement = function() {
                var e = t(this._element).parent(),
                  n = D;
                return e.hasClass(d) ? (n = A, t(this._menu).hasClass(p) && (n = b)) : e.hasClass(_) ? n = w : e.hasClass(g) ? n = N : t(this._menu).hasClass(p) && (n = S), n
              }, l._detectNavbar = function() {
                return t(this._element).closest(".navbar").length > 0
              }, l._getPopperConfig = function() {
                var t = this,
                  e = {};
                return "function" == typeof this._config.offset ? e.fn = function(e) {
                  return e.offsets = r({}, e.offsets, t._config.offset(e.offsets) || {}), e
                } : e.offset = this._config.offset, {
                  placement: this._getPlacement(),
                  modifiers: {
                    offset: e,
                    flip: {
                      enabled: this._config.flip
                    },
                    preventOverflow: {
                      boundariesElement: this._config.boundary
                    }
                  }
                }
              }, a._jQueryInterface = function(e) {
                return this.each(function() {
                  var n = t(this).data(i);
                  if (n || (n = new a(this, "object" == typeof e ? e : null), t(this).data(i, n)), "string" == typeof e) {
                    if ("undefined" == typeof n[e]) throw new TypeError('No method named "' + e + '"');
                    n[e]()
                  }
                })
              }, a._clearMenus = function(e) {
                if (!e || 3 !== e.which && ("keyup" !== e.type || 9 === e.which))
                  for (var n = t.makeArray(t(E)), s = 0; s < n.length; s++) {
                    var r = a._getParentFromElement(n[s]),
                      o = t(n[s]).data(i),
                      l = {
                        relatedTarget: n[s]
                      };
                    if (o) {
                      var h = o._menu;
                      if (t(r).hasClass(f) && !(e && ("click" === e.type && /input|textarea/i.test(e.target.tagName) || "keyup" === e.type && 9 === e.which) && t.contains(r, e.target))) {
                        var u = t.Event(c.HIDE, l);
                        t(r).trigger(u), u.isDefaultPrevented() || ("ontouchstart" in document.documentElement && t("body").children().off("mouseover", null, t.noop), n[s].setAttribute("aria-expanded", "false"), t(h).removeClass(f), t(r).removeClass(f).trigger(t.Event(c.HIDDEN, l)))
                      }
                    }
                  }
              }, a._getParentFromElement = function(e) {
                var n, i = P.getSelectorFromElement(e);
                return i && (n = t(i)[0]), n || e.parentNode
              }, a._dataApiKeydownHandler = function(e) {
                if ((/input|textarea/i.test(e.target.tagName) ? !(32 === e.which || 27 !== e.which && (40 !== e.which && 38 !== e.which || t(e.target).closest(y).length)) : h.test(e.which)) && (e.preventDefault(), e.stopPropagation(), !this.disabled && !t(this).hasClass(u))) {
                  var n = a._getParentFromElement(this),
                    i = t(n).hasClass(f);
                  if ((i || 27 === e.which && 32 === e.which) && (!i || 27 !== e.which && 32 !== e.which)) {
                    var s = t(n).find(I).get();
                    if (0 !== s.length) {
                      var r = s.indexOf(e.target);
                      38 === e.which && r > 0 && r--, 40 === e.which && r < s.length - 1 && r++, r < 0 && (r = 0), s[r].focus()
                    }
                  } else {
                    if (27 === e.which) {
                      var o = t(n).find(E)[0];
                      t(o).trigger("focus")
                    }
                    t(this).trigger("click")
                  }
                }
              }, s(a, null, [{
                key: "VERSION",
                get: function() {
                  return "4.0.0"
                }
              }, {
                key: "Default",
                get: function() {
                  return O
                }
              }, {
                key: "DefaultType",
                get: function() {
                  return k
                }
              }]), a
            }();
          return t(document).on(c.KEYDOWN_DATA_API, E, L._dataApiKeydownHandler).on(c.KEYDOWN_DATA_API, y, L._dataApiKeydownHandler).on(c.CLICK_DATA_API + " " + c.KEYUP_DATA_API, L._clearMenus).on(c.CLICK_DATA_API, E, function(e) {
            e.preventDefault(), e.stopPropagation(), L._jQueryInterface.call(t(this), "toggle")
          }).on(c.CLICK_DATA_API, T, function(t) {
            t.stopPropagation()
          }), t.fn[e] = L._jQueryInterface, t.fn[e].Constructor = L, t.fn[e].noConflict = function() {
            return t.fn[e] = l, L._jQueryInterface
          }, L
        }(e),
        M = function(t) {
          var e = "modal",
            n = "bs.modal",
            i = "." + n,
            o = t.fn.modal,
            a = {
              backdrop: !0,
              keyboard: !0,
              focus: !0,
              show: !0
            },
            l = {
              backdrop: "(boolean|string)",
              keyboard: "boolean",
              focus: "boolean",
              show: "boolean"
            },
            h = {
              HIDE: "hide" + i,
              HIDDEN: "hidden" + i,
              SHOW: "show" + i,
              SHOWN: "shown" + i,
              FOCUSIN: "focusin" + i,
              RESIZE: "resize" + i,
              CLICK_DISMISS: "click.dismiss" + i,
              KEYDOWN_DISMISS: "keydown.dismiss" + i,
              MOUSEUP_DISMISS: "mouseup.dismiss" + i,
              MOUSEDOWN_DISMISS: "mousedown.dismiss" + i,
              CLICK_DATA_API: "click" + i + ".data-api"
            },
            c = "modal-scrollbar-measure",
            u = "modal-backdrop",
            f = "modal-open",
            d = "fade",
            _ = "show",
            g = {
              DIALOG: ".modal-dialog",
              DATA_TOGGLE: '[data-toggle="modal"]',
              DATA_DISMISS: '[data-dismiss="modal"]',
              FIXED_CONTENT: ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top",
              STICKY_CONTENT: ".sticky-top",
              NAVBAR_TOGGLER: ".navbar-toggler"
            },
            p = function() {
              function o(e, n) {
                this._config = this._getConfig(n), this._element = e, this._dialog = t(e).find(g.DIALOG)[0], this._backdrop = null, this._isShown = !1, this._isBodyOverflowing = !1, this._ignoreBackdropClick = !1, this._originalBodyPadding = 0, this._scrollbarWidth = 0
              }
              var p = o.prototype;
              return p.toggle = function(t) {
                return this._isShown ? this.hide() : this.show(t)
              }, p.show = function(e) {
                var n = this;
                if (!this._isTransitioning && !this._isShown) {
                  P.supportsTransitionEnd() && t(this._element).hasClass(d) && (this._isTransitioning = !0);
                  var i = t.Event(h.SHOW, {
                    relatedTarget: e
                  });
                  t(this._element).trigger(i), this._isShown || i.isDefaultPrevented() || (this._isShown = !0, this._checkScrollbar(), this._setScrollbar(), this._adjustDialog(), t(document.body).addClass(f), this._setEscapeEvent(), this._setResizeEvent(), t(this._element).on(h.CLICK_DISMISS, g.DATA_DISMISS, function(t) {
                    return n.hide(t)
                  }), t(this._dialog).on(h.MOUSEDOWN_DISMISS, function() {
                    t(n._element).one(h.MOUSEUP_DISMISS, function(e) {
                      t(e.target).is(n._element) && (n._ignoreBackdropClick = !0)
                    })
                  }), this._showBackdrop(function() {
                    return n._showElement(e)
                  }))
                }
              }, p.hide = function(e) {
                var n = this;
                if (e && e.preventDefault(), !this._isTransitioning && this._isShown) {
                  var i = t.Event(h.HIDE);
                  if (t(this._element).trigger(i), this._isShown && !i.isDefaultPrevented()) {
                    this._isShown = !1;
                    var s = P.supportsTransitionEnd() && t(this._element).hasClass(d);
                    s && (this._isTransitioning = !0), this._setEscapeEvent(), this._setResizeEvent(), t(document).off(h.FOCUSIN), t(this._element).removeClass(_), t(this._element).off(h.CLICK_DISMISS), t(this._dialog).off(h.MOUSEDOWN_DISMISS), s ? t(this._element).one(P.TRANSITION_END, function(t) {
                      return n._hideModal(t)
                    }).emulateTransitionEnd(300) : this._hideModal()
                  }
                }
              }, p.dispose = function() {
                t.removeData(this._element, n), t(window, document, this._element, this._backdrop).off(i), this._config = null, this._element = null, this._dialog = null, this._backdrop = null, this._isShown = null, this._isBodyOverflowing = null, this._ignoreBackdropClick = null, this._scrollbarWidth = null
              }, p.handleUpdate = function() {
                this._adjustDialog()
              }, p._getConfig = function(t) {
                return t = r({}, a, t), P.typeCheckConfig(e, t, l), t
              }, p._showElement = function(e) {
                var n = this,
                  i = P.supportsTransitionEnd() && t(this._element).hasClass(d);
                this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE || document.body.appendChild(this._element), this._element.style.display = "block", this._element.removeAttribute("aria-hidden"), this._element.scrollTop = 0, i && P.reflow(this._element), t(this._element).addClass(_), this._config.focus && this._enforceFocus();
                var s = t.Event(h.SHOWN, {
                    relatedTarget: e
                  }),
                  r = function() {
                    n._config.focus && n._element.focus(), n._isTransitioning = !1, t(n._element).trigger(s)
                  };
                i ? t(this._dialog).one(P.TRANSITION_END, r).emulateTransitionEnd(300) : r()
              }, p._enforceFocus = function() {
                var e = this;
                t(document).off(h.FOCUSIN).on(h.FOCUSIN, function(n) {
                  document !== n.target && e._element !== n.target && 0 === t(e._element).has(n.target).length && e._element.focus()
                })
              }, p._setEscapeEvent = function() {
                var e = this;
                this._isShown && this._config.keyboard ? t(this._element).on(h.KEYDOWN_DISMISS, function(t) {
                  27 === t.which && (t.preventDefault(), e.hide())
                }) : this._isShown || t(this._element).off(h.KEYDOWN_DISMISS)
              }, p._setResizeEvent = function() {
                var e = this;
                this._isShown ? t(window).on(h.RESIZE, function(t) {
                  return e.handleUpdate(t)
                }) : t(window).off(h.RESIZE)
              }, p._hideModal = function() {
                var e = this;
                this._element.style.display = "none", this._element.setAttribute("aria-hidden", !0), this._isTransitioning = !1, this._showBackdrop(function() {
                  t(document.body).removeClass(f), e._resetAdjustments(), e._resetScrollbar(), t(e._element).trigger(h.HIDDEN)
                })
              }, p._removeBackdrop = function() {
                this._backdrop && (t(this._backdrop).remove(), this._backdrop = null)
              }, p._showBackdrop = function(e) {
                var n = this,
                  i = t(this._element).hasClass(d) ? d : "";
                if (this._isShown && this._config.backdrop) {
                  var s = P.supportsTransitionEnd() && i;
                  if (this._backdrop = document.createElement("div"), this._backdrop.className = u, i && t(this._backdrop).addClass(i), t(this._backdrop).appendTo(document.body), t(this._element).on(h.CLICK_DISMISS, function(t) {
                      n._ignoreBackdropClick ? n._ignoreBackdropClick = !1 : t.target === t.currentTarget && ("static" === n._config.backdrop ? n._element.focus() : n.hide())
                    }), s && P.reflow(this._backdrop), t(this._backdrop).addClass(_), !e) return;
                  if (!s) return void e();
                  t(this._backdrop).one(P.TRANSITION_END, e).emulateTransitionEnd(150)
                } else if (!this._isShown && this._backdrop) {
                  t(this._backdrop).removeClass(_);
                  var r = function() {
                    n._removeBackdrop(), e && e()
                  };
                  P.supportsTransitionEnd() && t(this._element).hasClass(d) ? t(this._backdrop).one(P.TRANSITION_END, r).emulateTransitionEnd(150) : r()
                } else e && e()
              }, p._adjustDialog = function() {
                var t = this._element.scrollHeight > document.documentElement.clientHeight;
                !this._isBodyOverflowing && t && (this._element.style.paddingLeft = this._scrollbarWidth + "px"), this._isBodyOverflowing && !t && (this._element.style.paddingRight = this._scrollbarWidth + "px")
              }, p._resetAdjustments = function() {
                this._element.style.paddingLeft = "", this._element.style.paddingRight = ""
              }, p._checkScrollbar = function() {
                var t = document.body.getBoundingClientRect();
                this._isBodyOverflowing = t.left + t.right < window.innerWidth, this._scrollbarWidth = this._getScrollbarWidth()
              }, p._setScrollbar = function() {
                var e = this;
                if (this._isBodyOverflowing) {
                  t(g.FIXED_CONTENT).each(function(n, i) {
                    var s = t(i)[0].style.paddingRight,
                      r = t(i).css("padding-right");
                    t(i).data("padding-right", s).css("padding-right", parseFloat(r) + e._scrollbarWidth + "px")
                  }), t(g.STICKY_CONTENT).each(function(n, i) {
                    var s = t(i)[0].style.marginRight,
                      r = t(i).css("margin-right");
                    t(i).data("margin-right", s).css("margin-right", parseFloat(r) - e._scrollbarWidth + "px")
                  }), t(g.NAVBAR_TOGGLER).each(function(n, i) {
                    var s = t(i)[0].style.marginRight,
                      r = t(i).css("margin-right");
                    t(i).data("margin-right", s).css("margin-right", parseFloat(r) + e._scrollbarWidth + "px")
                  });
                  var n = document.body.style.paddingRight,
                    i = t("body").css("padding-right");
                  t("body").data("padding-right", n).css("padding-right", parseFloat(i) + this._scrollbarWidth + "px")
                }
              }, p._resetScrollbar = function() {
                t(g.FIXED_CONTENT).each(function(e, n) {
                  var i = t(n).data("padding-right");
                  "undefined" != typeof i && t(n).css("padding-right", i).removeData("padding-right")
                }), t(g.STICKY_CONTENT + ", " + g.NAVBAR_TOGGLER).each(function(e, n) {
                  var i = t(n).data("margin-right");
                  "undefined" != typeof i && t(n).css("margin-right", i).removeData("margin-right")
                });
                var e = t("body").data("padding-right");
                "undefined" != typeof e && t("body").css("padding-right", e).removeData("padding-right")
              }, p._getScrollbarWidth = function() {
                var t = document.createElement("div");
                t.className = c, document.body.appendChild(t);
                var e = t.getBoundingClientRect().width - t.clientWidth;
                return document.body.removeChild(t), e
              }, o._jQueryInterface = function(e, i) {
                return this.each(function() {
                  var s = t(this).data(n),
                    a = r({}, o.Default, t(this).data(), "object" == typeof e && e);
                  if (s || (s = new o(this, a), t(this).data(n, s)), "string" == typeof e) {
                    if ("undefined" == typeof s[e]) throw new TypeError('No method named "' + e + '"');
                    s[e](i)
                  } else a.show && s.show(i)
                })
              }, s(o, null, [{
                key: "VERSION",
                get: function() {
                  return "4.0.0"
                }
              }, {
                key: "Default",
                get: function() {
                  return a
                }
              }]), o
            }();
          return t(document).on(h.CLICK_DATA_API, g.DATA_TOGGLE, function(e) {
            var i, s = this,
              o = P.getSelectorFromElement(this);
            o && (i = t(o)[0]);
            var a = t(i).data(n) ? "toggle" : r({}, t(i).data(), t(this).data());
            "A" !== this.tagName && "AREA" !== this.tagName || e.preventDefault();
            var l = t(i).one(h.SHOW, function(e) {
              e.isDefaultPrevented() || l.one(h.HIDDEN, function() {
                t(s).is(":visible") && s.focus()
              })
            });
            p._jQueryInterface.call(t(i), a, this)
          }), t.fn.modal = p._jQueryInterface, t.fn.modal.Constructor = p, t.fn.modal.noConflict = function() {
            return t.fn.modal = o, p._jQueryInterface
          }, p
        }(e),
        U = function(t) {
          var e = "tooltip",
            i = "bs.tooltip",
            o = "." + i,
            a = t.fn[e],
            l = new RegExp("(^|\\s)bs-tooltip\\S+", "g"),
            h = {
              animation: "boolean",
              template: "string",
              title: "(string|element|function)",
              trigger: "string",
              delay: "(number|object)",
              html: "boolean",
              selector: "(string|boolean)",
              placement: "(string|function)",
              offset: "(number|string)",
              container: "(string|element|boolean)",
              fallbackPlacement: "(string|array)",
              boundary: "(string|element)"
            },
            c = {
              AUTO: "auto",
              TOP: "top",
              RIGHT: "right",
              BOTTOM: "bottom",
              LEFT: "left"
            },
            u = {
              animation: !0,
              template: '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
              trigger: "hover focus",
              title: "",
              delay: 0,
              html: !1,
              selector: !1,
              placement: "top",
              offset: 0,
              container: !1,
              fallbackPlacement: "flip",
              boundary: "scrollParent"
            },
            f = "show",
            d = "out",
            _ = {
              HIDE: "hide" + o,
              HIDDEN: "hidden" + o,
              SHOW: "show" + o,
              SHOWN: "shown" + o,
              INSERTED: "inserted" + o,
              CLICK: "click" + o,
              FOCUSIN: "focusin" + o,
              FOCUSOUT: "focusout" + o,
              MOUSEENTER: "mouseenter" + o,
              MOUSELEAVE: "mouseleave" + o
            },
            g = "fade",
            p = "show",
            m = ".tooltip-inner",
            v = ".arrow",
            E = "hover",
            T = "focus",
            y = "click",
            C = "manual",
            I = function() {
              function a(t, e) {
                if ("undefined" == typeof n) throw new TypeError("Bootstrap tooltips require Popper.js (https://popper.js.org)");
                this._isEnabled = !0, this._timeout = 0, this._hoverState = "", this._activeTrigger = {}, this._popper = null, this.element = t, this.config = this._getConfig(e), this.tip = null, this._setListeners()
              }
              var I = a.prototype;
              return I.enable = function() {
                this._isEnabled = !0
              }, I.disable = function() {
                this._isEnabled = !1
              }, I.toggleEnabled = function() {
                this._isEnabled = !this._isEnabled
              }, I.toggle = function(e) {
                if (this._isEnabled)
                  if (e) {
                    var n = this.constructor.DATA_KEY,
                      i = t(e.currentTarget).data(n);
                    i || (i = new this.constructor(e.currentTarget, this._getDelegateConfig()), t(e.currentTarget).data(n, i)), i._activeTrigger.click = !i._activeTrigger.click, i._isWithActiveTrigger() ? i._enter(null, i) : i._leave(null, i)
                  } else {
                    if (t(this.getTipElement()).hasClass(p)) return void this._leave(null, this);
                    this._enter(null, this)
                  }
              }, I.dispose = function() {
                clearTimeout(this._timeout), t.removeData(this.element, this.constructor.DATA_KEY), t(this.element).off(this.constructor.EVENT_KEY), t(this.element).closest(".modal").off("hide.bs.modal"), this.tip && t(this.tip).remove(), this._isEnabled = null, this._timeout = null, this._hoverState = null, this._activeTrigger = null, null !== this._popper && this._popper.destroy(), this._popper = null, this.element = null, this.config = null, this.tip = null
              }, I.show = function() {
                var e = this;
                if ("none" === t(this.element).css("display")) throw new Error("Please use show on visible elements");
                var i = t.Event(this.constructor.Event.SHOW);
                if (this.isWithContent() && this._isEnabled) {
                  t(this.element).trigger(i);
                  var s = t.contains(this.element.ownerDocument.documentElement, this.element);
                  if (i.isDefaultPrevented() || !s) return;
                  var r = this.getTipElement(),
                    o = P.getUID(this.constructor.NAME);
                  r.setAttribute("id", o), this.element.setAttribute("aria-describedby", o), this.setContent(), this.config.animation && t(r).addClass(g);
                  var l = "function" == typeof this.config.placement ? this.config.placement.call(this, r, this.element) : this.config.placement,
                    h = this._getAttachment(l);
                  this.addAttachmentClass(h);
                  var c = !1 === this.config.container ? document.body : t(this.config.container);
                  t(r).data(this.constructor.DATA_KEY, this), t.contains(this.element.ownerDocument.documentElement, this.tip) || t(r).appendTo(c), t(this.element).trigger(this.constructor.Event.INSERTED), this._popper = new n(this.element, r, {
                    placement: h,
                    modifiers: {
                      offset: {
                        offset: this.config.offset
                      },
                      flip: {
                        behavior: this.config.fallbackPlacement
                      },
                      arrow: {
                        element: v
                      },
                      preventOverflow: {
                        boundariesElement: this.config.boundary
                      }
                    },
                    onCreate: function(t) {
                      t.originalPlacement !== t.placement && e._handlePopperPlacementChange(t)
                    },
                    onUpdate: function(t) {
                      e._handlePopperPlacementChange(t)
                    }
                  }), t(r).addClass(p), "ontouchstart" in document.documentElement && t("body").children().on("mouseover", null, t.noop);
                  var u = function() {
                    e.config.animation && e._fixTransition();
                    var n = e._hoverState;
                    e._hoverState = null, t(e.element).trigger(e.constructor.Event.SHOWN), n === d && e._leave(null, e)
                  };
                  P.supportsTransitionEnd() && t(this.tip).hasClass(g) ? t(this.tip).one(P.TRANSITION_END, u).emulateTransitionEnd(a._TRANSITION_DURATION) : u()
                }
              }, I.hide = function(e) {
                var n = this,
                  i = this.getTipElement(),
                  s = t.Event(this.constructor.Event.HIDE),
                  r = function() {
                    n._hoverState !== f && i.parentNode && i.parentNode.removeChild(i), n._cleanTipClass(), n.element.removeAttribute("aria-describedby"), t(n.element).trigger(n.constructor.Event.HIDDEN), null !== n._popper && n._popper.destroy(), e && e()
                  };
                t(this.element).trigger(s), s.isDefaultPrevented() || (t(i).removeClass(p), "ontouchstart" in document.documentElement && t("body").children().off("mouseover", null, t.noop), this._activeTrigger[y] = !1, this._activeTrigger[T] = !1, this._activeTrigger[E] = !1, P.supportsTransitionEnd() && t(this.tip).hasClass(g) ? t(i).one(P.TRANSITION_END, r).emulateTransitionEnd(150) : r(), this._hoverState = "")
              }, I.update = function() {
                null !== this._popper && this._popper.scheduleUpdate()
              }, I.isWithContent = function() {
                return Boolean(this.getTitle())
              }, I.addAttachmentClass = function(e) {
                t(this.getTipElement()).addClass("bs-tooltip-" + e)
              }, I.getTipElement = function() {
                return this.tip = this.tip || t(this.config.template)[0], this.tip
              }, I.setContent = function() {
                var e = t(this.getTipElement());
                this.setElementContent(e.find(m), this.getTitle()), e.removeClass(g + " " + p)
              }, I.setElementContent = function(e, n) {
                var i = this.config.html;
                "object" == typeof n && (n.nodeType || n.jquery) ? i ? t(n).parent().is(e) || e.empty().append(n) : e.text(t(n).text()) : e[i ? "html" : "text"](n)
              }, I.getTitle = function() {
                var t = this.element.getAttribute("data-original-title");
                return t || (t = "function" == typeof this.config.title ? this.config.title.call(this.element) : this.config.title), t
              }, I._getAttachment = function(t) {
                return c[t.toUpperCase()]
              }, I._setListeners = function() {
                var e = this;
                this.config.trigger.split(" ").forEach(function(n) {
                  if ("click" === n) t(e.element).on(e.constructor.Event.CLICK, e.config.selector, function(t) {
                    return e.toggle(t)
                  });
                  else if (n !== C) {
                    var i = n === E ? e.constructor.Event.MOUSEENTER : e.constructor.Event.FOCUSIN,
                      s = n === E ? e.constructor.Event.MOUSELEAVE : e.constructor.Event.FOCUSOUT;
                    t(e.element).on(i, e.config.selector, function(t) {
                      return e._enter(t)
                    }).on(s, e.config.selector, function(t) {
                      return e._leave(t)
                    })
                  }
                  t(e.element).closest(".modal").on("hide.bs.modal", function() {
                    return e.hide()
                  })
                }), this.config.selector ? this.config = r({}, this.config, {
                  trigger: "manual",
                  selector: ""
                }) : this._fixTitle()
              }, I._fixTitle = function() {
                var t = typeof this.element.getAttribute("data-original-title");
                (this.element.getAttribute("title") || "string" !== t) && (this.element.setAttribute("data-original-title", this.element.getAttribute("title") || ""), this.element.setAttribute("title", ""))
              }, I._enter = function(e, n) {
                var i = this.constructor.DATA_KEY;
                (n = n || t(e.currentTarget).data(i)) || (n = new this.constructor(e.currentTarget, this._getDelegateConfig()), t(e.currentTarget).data(i, n)), e && (n._activeTrigger["focusin" === e.type ? T : E] = !0), t(n.getTipElement()).hasClass(p) || n._hoverState === f ? n._hoverState = f : (clearTimeout(n._timeout), n._hoverState = f, n.config.delay && n.config.delay.show ? n._timeout = setTimeout(function() {
                  n._hoverState === f && n.show()
                }, n.config.delay.show) : n.show())
              }, I._leave = function(e, n) {
                var i = this.constructor.DATA_KEY;
                (n = n || t(e.currentTarget).data(i)) || (n = new this.constructor(e.currentTarget, this._getDelegateConfig()), t(e.currentTarget).data(i, n)), e && (n._activeTrigger["focusout" === e.type ? T : E] = !1), n._isWithActiveTrigger() || (clearTimeout(n._timeout), n._hoverState = d, n.config.delay && n.config.delay.hide ? n._timeout = setTimeout(function() {
                  n._hoverState === d && n.hide()
                }, n.config.delay.hide) : n.hide())
              }, I._isWithActiveTrigger = function() {
                for (var t in this._activeTrigger)
                  if (this._activeTrigger[t]) return !0;
                return !1
              }, I._getConfig = function(n) {
                return "number" == typeof(n = r({}, this.constructor.Default, t(this.element).data(), n)).delay && (n.delay = {
                  show: n.delay,
                  hide: n.delay
                }), "number" == typeof n.title && (n.title = n.title.toString()), "number" == typeof n.content && (n.content = n.content.toString()), P.typeCheckConfig(e, n, this.constructor.DefaultType), n
              }, I._getDelegateConfig = function() {
                var t = {};
                if (this.config)
                  for (var e in this.config) this.constructor.Default[e] !== this.config[e] && (t[e] = this.config[e]);
                return t
              }, I._cleanTipClass = function() {
                var e = t(this.getTipElement()),
                  n = e.attr("class").match(l);
                null !== n && n.length > 0 && e.removeClass(n.join(""))
              }, I._handlePopperPlacementChange = function(t) {
                this._cleanTipClass(), this.addAttachmentClass(this._getAttachment(t.placement))
              }, I._fixTransition = function() {
                var e = this.getTipElement(),
                  n = this.config.animation;
                null === e.getAttribute("x-placement") && (t(e).removeClass(g), this.config.animation = !1, this.hide(), this.show(), this.config.animation = n)
              }, a._jQueryInterface = function(e) {
                return this.each(function() {
                  var n = t(this).data(i),
                    s = "object" == typeof e && e;
                  if ((n || !/dispose|hide/.test(e)) && (n || (n = new a(this, s), t(this).data(i, n)), "string" == typeof e)) {
                    if ("undefined" == typeof n[e]) throw new TypeError('No method named "' + e + '"');
                    n[e]()
                  }
                })
              }, s(a, null, [{
                key: "VERSION",
                get: function() {
                  return "4.0.0"
                }
              }, {
                key: "Default",
                get: function() {
                  return u
                }
              }, {
                key: "NAME",
                get: function() {
                  return e
                }
              }, {
                key: "DATA_KEY",
                get: function() {
                  return i
                }
              }, {
                key: "Event",
                get: function() {
                  return _
                }
              }, {
                key: "EVENT_KEY",
                get: function() {
                  return o
                }
              }, {
                key: "DefaultType",
                get: function() {
                  return h
                }
              }]), a
            }();
          return t.fn[e] = I._jQueryInterface, t.fn[e].Constructor = I, t.fn[e].noConflict = function() {
            return t.fn[e] = a, I._jQueryInterface
          }, I
        }(e),
        x = function(t) {
          var e = "popover",
            n = "bs.popover",
            i = "." + n,
            o = t.fn[e],
            a = new RegExp("(^|\\s)bs-popover\\S+", "g"),
            l = r({}, U.Default, {
              placement: "right",
              trigger: "click",
              content: "",
              template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
            }),
            h = r({}, U.DefaultType, {
              content: "(string|element|function)"
            }),
            c = "fade",
            u = "show",
            f = ".popover-header",
            d = ".popover-body",
            _ = {
              HIDE: "hide" + i,
              HIDDEN: "hidden" + i,
              SHOW: "show" + i,
              SHOWN: "shown" + i,
              INSERTED: "inserted" + i,
              CLICK: "click" + i,
              FOCUSIN: "focusin" + i,
              FOCUSOUT: "focusout" + i,
              MOUSEENTER: "mouseenter" + i,
              MOUSELEAVE: "mouseleave" + i
            },
            g = function(r) {
              var o, g;

              function p() {
                return r.apply(this, arguments) || this
              }
              g = r, (o = p).prototype = Object.create(g.prototype), o.prototype.constructor = o, o.__proto__ = g;
              var m = p.prototype;
              return m.isWithContent = function() {
                return this.getTitle() || this._getContent()
              }, m.addAttachmentClass = function(e) {
                t(this.getTipElement()).addClass("bs-popover-" + e)
              }, m.getTipElement = function() {
                return this.tip = this.tip || t(this.config.template)[0], this.tip
              }, m.setContent = function() {
                var e = t(this.getTipElement());
                this.setElementContent(e.find(f), this.getTitle());
                var n = this._getContent();
                "function" == typeof n && (n = n.call(this.element)), this.setElementContent(e.find(d), n), e.removeClass(c + " " + u)
              }, m._getContent = function() {
                return this.element.getAttribute("data-content") || this.config.content
              }, m._cleanTipClass = function() {
                var e = t(this.getTipElement()),
                  n = e.attr("class").match(a);
                null !== n && n.length > 0 && e.removeClass(n.join(""))
              }, p._jQueryInterface = function(e) {
                return this.each(function() {
                  var i = t(this).data(n),
                    s = "object" == typeof e ? e : null;
                  if ((i || !/destroy|hide/.test(e)) && (i || (i = new p(this, s), t(this).data(n, i)), "string" == typeof e)) {
                    if ("undefined" == typeof i[e]) throw new TypeError('No method named "' + e + '"');
                    i[e]()
                  }
                })
              }, s(p, null, [{
                key: "VERSION",
                get: function() {
                  return "4.0.0"
                }
              }, {
                key: "Default",
                get: function() {
                  return l
                }
              }, {
                key: "NAME",
                get: function() {
                  return e
                }
              }, {
                key: "DATA_KEY",
                get: function() {
                  return n
                }
              }, {
                key: "Event",
                get: function() {
                  return _
                }
              }, {
                key: "EVENT_KEY",
                get: function() {
                  return i
                }
              }, {
                key: "DefaultType",
                get: function() {
                  return h
                }
              }]), p
            }(U);
          return t.fn[e] = g._jQueryInterface, t.fn[e].Constructor = g, t.fn[e].noConflict = function() {
            return t.fn[e] = o, g._jQueryInterface
          }, g
        }(e),
        K = function(t) {
          var e = "scrollspy",
            n = "bs.scrollspy",
            i = "." + n,
            o = t.fn[e],
            a = {
              offset: 10,
              method: "auto",
              target: ""
            },
            l = {
              offset: "number",
              method: "string",
              target: "(string|element)"
            },
            h = {
              ACTIVATE: "activate" + i,
              SCROLL: "scroll" + i,
              LOAD_DATA_API: "load" + i + ".data-api"
            },
            c = "dropdown-item",
            u = "active",
            f = {
              DATA_SPY: '[data-spy="scroll"]',
              ACTIVE: ".active",
              NAV_LIST_GROUP: ".nav, .list-group",
              NAV_LINKS: ".nav-link",
              NAV_ITEMS: ".nav-item",
              LIST_ITEMS: ".list-group-item",
              DROPDOWN: ".dropdown",
              DROPDOWN_ITEMS: ".dropdown-item",
              DROPDOWN_TOGGLE: ".dropdown-toggle"
            },
            d = "offset",
            _ = "position",
            g = function() {
              function o(e, n) {
                var i = this;
                this._element = e, this._scrollElement = "BODY" === e.tagName ? window : e, this._config = this._getConfig(n), this._selector = this._config.target + " " + f.NAV_LINKS + "," + this._config.target + " " + f.LIST_ITEMS + "," + this._config.target + " " + f.DROPDOWN_ITEMS, this._offsets = [], this._targets = [], this._activeTarget = null, this._scrollHeight = 0, t(this._scrollElement).on(h.SCROLL, function(t) {
                  return i._process(t)
                }), this.refresh(), this._process()
              }
              var g = o.prototype;
              return g.refresh = function() {
                var e = this,
                  n = this._scrollElement === this._scrollElement.window ? d : _,
                  i = "auto" === this._config.method ? n : this._config.method,
                  s = i === _ ? this._getScrollTop() : 0;
                this._offsets = [], this._targets = [], this._scrollHeight = this._getScrollHeight(), t.makeArray(t(this._selector)).map(function(e) {
                  var n, r = P.getSelectorFromElement(e);
                  if (r && (n = t(r)[0]), n) {
                    var o = n.getBoundingClientRect();
                    if (o.width || o.height) return [t(n)[i]().top + s, r]
                  }
                  return null
                }).filter(function(t) {
                  return t
                }).sort(function(t, e) {
                  return t[0] - e[0]
                }).forEach(function(t) {
                  e._offsets.push(t[0]), e._targets.push(t[1])
                })
              }, g.dispose = function() {
                t.removeData(this._element, n), t(this._scrollElement).off(i), this._element = null, this._scrollElement = null, this._config = null, this._selector = null, this._offsets = null, this._targets = null, this._activeTarget = null, this._scrollHeight = null
              }, g._getConfig = function(n) {
                if ("string" != typeof(n = r({}, a, n)).target) {
                  var i = t(n.target).attr("id");
                  i || (i = P.getUID(e), t(n.target).attr("id", i)), n.target = "#" + i
                }
                return P.typeCheckConfig(e, n, l), n
              }, g._getScrollTop = function() {
                return this._scrollElement === window ? this._scrollElement.pageYOffset : this._scrollElement.scrollTop
              }, g._getScrollHeight = function() {
                return this._scrollElement.scrollHeight || Math.max(document.body.scrollHeight, document.documentElement.scrollHeight)
              }, g._getOffsetHeight = function() {
                return this._scrollElement === window ? window.innerHeight : this._scrollElement.getBoundingClientRect().height
              }, g._process = function() {
                var t = this._getScrollTop() + this._config.offset,
                  e = this._getScrollHeight(),
                  n = this._config.offset + e - this._getOffsetHeight();
                if (this._scrollHeight !== e && this.refresh(), t >= n) {
                  var i = this._targets[this._targets.length - 1];
                  this._activeTarget !== i && this._activate(i)
                } else {
                  if (this._activeTarget && t < this._offsets[0] && this._offsets[0] > 0) return this._activeTarget = null, void this._clear();
                  for (var s = this._offsets.length; s--;) {
                    this._activeTarget !== this._targets[s] && t >= this._offsets[s] && ("undefined" == typeof this._offsets[s + 1] || t < this._offsets[s + 1]) && this._activate(this._targets[s])
                  }
                }
              }, g._activate = function(e) {
                this._activeTarget = e, this._clear();
                var n = this._selector.split(",");
                n = n.map(function(t) {
                  return t + '[data-target="' + e + '"],' + t + '[href="' + e + '"]'
                });
                var i = t(n.join(","));
                i.hasClass(c) ? (i.closest(f.DROPDOWN).find(f.DROPDOWN_TOGGLE).addClass(u), i.addClass(u)) : (i.addClass(u), i.parents(f.NAV_LIST_GROUP).prev(f.NAV_LINKS + ", " + f.LIST_ITEMS).addClass(u), i.parents(f.NAV_LIST_GROUP).prev(f.NAV_ITEMS).children(f.NAV_LINKS).addClass(u)), t(this._scrollElement).trigger(h.ACTIVATE, {
                  relatedTarget: e
                })
              }, g._clear = function() {
                t(this._selector).filter(f.ACTIVE).removeClass(u)
              }, o._jQueryInterface = function(e) {
                return this.each(function() {
                  var i = t(this).data(n);
                  if (i || (i = new o(this, "object" == typeof e && e), t(this).data(n, i)), "string" == typeof e) {
                    if ("undefined" == typeof i[e]) throw new TypeError('No method named "' + e + '"');
                    i[e]()
                  }
                })
              }, s(o, null, [{
                key: "VERSION",
                get: function() {
                  return "4.0.0"
                }
              }, {
                key: "Default",
                get: function() {
                  return a
                }
              }]), o
            }();
          return t(window).on(h.LOAD_DATA_API, function() {
            for (var e = t.makeArray(t(f.DATA_SPY)), n = e.length; n--;) {
              var i = t(e[n]);
              g._jQueryInterface.call(i, i.data())
            }
          }), t.fn[e] = g._jQueryInterface, t.fn[e].Constructor = g, t.fn[e].noConflict = function() {
            return t.fn[e] = o, g._jQueryInterface
          }, g
        }(e),
        V = function(t) {
          var e = "bs.tab",
            n = "." + e,
            i = t.fn.tab,
            r = {
              HIDE: "hide" + n,
              HIDDEN: "hidden" + n,
              SHOW: "show" + n,
              SHOWN: "shown" + n,
              CLICK_DATA_API: "click.bs.tab.data-api"
            },
            o = "dropdown-menu",
            a = "active",
            l = "disabled",
            h = "fade",
            c = "show",
            u = ".dropdown",
            f = ".nav, .list-group",
            d = ".active",
            _ = "> li > .active",
            g = '[data-toggle="tab"], [data-toggle="pill"], [data-toggle="list"]',
            p = ".dropdown-toggle",
            m = "> .dropdown-menu .active",
            v = function() {
              function n(t) {
                this._element = t
              }
              var i = n.prototype;
              return i.show = function() {
                var e = this;
                if (!(this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE && t(this._element).hasClass(a) || t(this._element).hasClass(l))) {
                  var n, i, s = t(this._element).closest(f)[0],
                    o = P.getSelectorFromElement(this._element);
                  if (s) {
                    var h = "UL" === s.nodeName ? _ : d;
                    i = (i = t.makeArray(t(s).find(h)))[i.length - 1]
                  }
                  var c = t.Event(r.HIDE, {
                      relatedTarget: this._element
                    }),
                    u = t.Event(r.SHOW, {
                      relatedTarget: i
                    });
                  if (i && t(i).trigger(c), t(this._element).trigger(u), !u.isDefaultPrevented() && !c.isDefaultPrevented()) {
                    o && (n = t(o)[0]), this._activate(this._element, s);
                    var g = function() {
                      var n = t.Event(r.HIDDEN, {
                          relatedTarget: e._element
                        }),
                        s = t.Event(r.SHOWN, {
                          relatedTarget: i
                        });
                      t(i).trigger(n), t(e._element).trigger(s)
                    };
                    n ? this._activate(n, n.parentNode, g) : g()
                  }
                }
              }, i.dispose = function() {
                t.removeData(this._element, e), this._element = null
              }, i._activate = function(e, n, i) {
                var s = this,
                  r = ("UL" === n.nodeName ? t(n).find(_) : t(n).children(d))[0],
                  o = i && P.supportsTransitionEnd() && r && t(r).hasClass(h),
                  a = function() {
                    return s._transitionComplete(e, r, i)
                  };
                r && o ? t(r).one(P.TRANSITION_END, a).emulateTransitionEnd(150) : a()
              }, i._transitionComplete = function(e, n, i) {
                if (n) {
                  t(n).removeClass(c + " " + a);
                  var s = t(n.parentNode).find(m)[0];
                  s && t(s).removeClass(a), "tab" === n.getAttribute("role") && n.setAttribute("aria-selected", !1)
                }
                if (t(e).addClass(a), "tab" === e.getAttribute("role") && e.setAttribute("aria-selected", !0), P.reflow(e), t(e).addClass(c), e.parentNode && t(e.parentNode).hasClass(o)) {
                  var r = t(e).closest(u)[0];
                  r && t(r).find(p).addClass(a), e.setAttribute("aria-expanded", !0)
                }
                i && i()
              }, n._jQueryInterface = function(i) {
                return this.each(function() {
                  var s = t(this),
                    r = s.data(e);
                  if (r || (r = new n(this), s.data(e, r)), "string" == typeof i) {
                    if ("undefined" == typeof r[i]) throw new TypeError('No method named "' + i + '"');
                    r[i]()
                  }
                })
              }, s(n, null, [{
                key: "VERSION",
                get: function() {
                  return "4.0.0"
                }
              }]), n
            }();
          return t(document).on(r.CLICK_DATA_API, g, function(e) {
            e.preventDefault(), v._jQueryInterface.call(t(this), "show")
          }), t.fn.tab = v._jQueryInterface, t.fn.tab.Constructor = v, t.fn.tab.noConflict = function() {
            return t.fn.tab = i, v._jQueryInterface
          }, v
        }(e);
      ! function(t) {
        if ("undefined" == typeof t) throw new TypeError("Bootstrap's JavaScript requires jQuery. jQuery must be included before Bootstrap's JavaScript.");
        var e = t.fn.jquery.split(" ")[0].split(".");
        if (e[0] < 2 && e[1] < 9 || 1 === e[0] && 9 === e[1] && e[2] < 1 || e[0] >= 4) throw new Error("Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0")
      }(e), t.Util = P, t.Alert = L, t.Button = R, t.Carousel = j, t.Collapse = H, t.Dropdown = W, t.Modal = M, t.Popover = x, t.Scrollspy = K, t.Tab = V, t.Tooltip = U, Object.defineProperty(t, "__esModule", {
        value: !0
      })
    });
  </script>

  <script>
    ! function(e, t) {
      "object" == typeof exports && "undefined" != typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define(t) : e.moment = t()
    }(this, function() {
      "use strict";
      var e, i;

      function c() {
        return e.apply(null, arguments)
      }

      function o(e) {
        return e instanceof Array || "[object Array]" === Object.prototype.toString.call(e)
      }

      function u(e) {
        return null != e && "[object Object]" === Object.prototype.toString.call(e)
      }

      function l(e) {
        return void 0 === e
      }

      function h(e) {
        return "number" == typeof e || "[object Number]" === Object.prototype.toString.call(e)
      }

      function d(e) {
        return e instanceof Date || "[object Date]" === Object.prototype.toString.call(e)
      }

      function f(e, t) {
        var n, s = [];
        for (n = 0; n < e.length; ++n) s.push(t(e[n], n));
        return s
      }

      function m(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
      }

      function _(e, t) {
        for (var n in t) m(t, n) && (e[n] = t[n]);
        return m(t, "toString") && (e.toString = t.toString), m(t, "valueOf") && (e.valueOf = t.valueOf), e
      }

      function y(e, t, n, s) {
        return Tt(e, t, n, s, !0).utc()
      }

      function g(e) {
        return null == e._pf && (e._pf = {
          empty: !1,
          unusedTokens: [],
          unusedInput: [],
          overflow: -2,
          charsLeftOver: 0,
          nullInput: !1,
          invalidMonth: null,
          invalidFormat: !1,
          userInvalidated: !1,
          iso: !1,
          parsedDateParts: [],
          meridiem: null,
          rfc2822: !1,
          weekdayMismatch: !1
        }), e._pf
      }

      function v(e) {
        if (null == e._isValid) {
          var t = g(e),
            n = i.call(t.parsedDateParts, function(e) {
              return null != e
            }),
            s = !isNaN(e._d.getTime()) && t.overflow < 0 && !t.empty && !t.invalidMonth && !t.invalidWeekday && !t.weekdayMismatch && !t.nullInput && !t.invalidFormat && !t.userInvalidated && (!t.meridiem || t.meridiem && n);
          if (e._strict && (s = s && 0 === t.charsLeftOver && 0 === t.unusedTokens.length && void 0 === t.bigHour), null != Object.isFrozen && Object.isFrozen(e)) return s;
          e._isValid = s
        }
        return e._isValid
      }

      function p(e) {
        var t = y(NaN);
        return null != e ? _(g(t), e) : g(t).userInvalidated = !0, t
      }
      i = Array.prototype.some ? Array.prototype.some : function(e) {
        for (var t = Object(this), n = t.length >>> 0, s = 0; s < n; s++)
          if (s in t && e.call(this, t[s], s, t)) return !0;
        return !1
      };
      var r = c.momentProperties = [];

      function w(e, t) {
        var n, s, i;
        if (l(t._isAMomentObject) || (e._isAMomentObject = t._isAMomentObject), l(t._i) || (e._i = t._i), l(t._f) || (e._f = t._f), l(t._l) || (e._l = t._l), l(t._strict) || (e._strict = t._strict), l(t._tzm) || (e._tzm = t._tzm), l(t._isUTC) || (e._isUTC = t._isUTC), l(t._offset) || (e._offset = t._offset), l(t._pf) || (e._pf = g(t)), l(t._locale) || (e._locale = t._locale), 0 < r.length)
          for (n = 0; n < r.length; n++) l(i = t[s = r[n]]) || (e[s] = i);
        return e
      }
      var t = !1;

      function M(e) {
        w(this, e), this._d = new Date(null != e._d ? e._d.getTime() : NaN), this.isValid() || (this._d = new Date(NaN)), !1 === t && (t = !0, c.updateOffset(this), t = !1)
      }

      function k(e) {
        return e instanceof M || null != e && null != e._isAMomentObject
      }

      function S(e) {
        return e < 0 ? Math.ceil(e) || 0 : Math.floor(e)
      }

      function D(e) {
        var t = +e,
          n = 0;
        return 0 !== t && isFinite(t) && (n = S(t)), n
      }

      function a(e, t, n) {
        var s, i = Math.min(e.length, t.length),
          r = Math.abs(e.length - t.length),
          a = 0;
        for (s = 0; s < i; s++)(n && e[s] !== t[s] || !n && D(e[s]) !== D(t[s])) && a++;
        return a + r
      }

      function Y(e) {
        !1 === c.suppressDeprecationWarnings && "undefined" != typeof console && console.warn && console.warn("Deprecation warning: " + e)
      }

      function n(i, r) {
        var a = !0;
        return _(function() {
          if (null != c.deprecationHandler && c.deprecationHandler(null, i), a) {
            for (var e, t = [], n = 0; n < arguments.length; n++) {
              if (e = "", "object" == typeof arguments[n]) {
                for (var s in e += "\n[" + n + "] ", arguments[0]) e += s + ": " + arguments[0][s] + ", ";
                e = e.slice(0, -2)
              } else e = arguments[n];
              t.push(e)
            }
            Y(i + "\nArguments: " + Array.prototype.slice.call(t).join("") + "\n" + (new Error).stack), a = !1
          }
          return r.apply(this, arguments)
        }, r)
      }
      var s, O = {};

      function T(e, t) {
        null != c.deprecationHandler && c.deprecationHandler(e, t), O[e] || (Y(t), O[e] = !0)
      }

      function b(e) {
        return e instanceof Function || "[object Function]" === Object.prototype.toString.call(e)
      }

      function x(e, t) {
        var n, s = _({}, e);
        for (n in t) m(t, n) && (u(e[n]) && u(t[n]) ? (s[n] = {}, _(s[n], e[n]), _(s[n], t[n])) : null != t[n] ? s[n] = t[n] : delete s[n]);
        for (n in e) m(e, n) && !m(t, n) && u(e[n]) && (s[n] = _({}, s[n]));
        return s
      }

      function P(e) {
        null != e && this.set(e)
      }
      c.suppressDeprecationWarnings = !1, c.deprecationHandler = null, s = Object.keys ? Object.keys : function(e) {
        var t, n = [];
        for (t in e) m(e, t) && n.push(t);
        return n
      };
      var W = {};

      function C(e, t) {
        var n = e.toLowerCase();
        W[n] = W[n + "s"] = W[t] = e
      }

      function H(e) {
        return "string" == typeof e ? W[e] || W[e.toLowerCase()] : void 0
      }

      function R(e) {
        var t, n, s = {};
        for (n in e) m(e, n) && (t = H(n)) && (s[t] = e[n]);
        return s
      }
      var U = {};

      function F(e, t) {
        U[e] = t
      }

      function L(e, t, n) {
        var s = "" + Math.abs(e),
          i = t - s.length;
        return (0 <= e ? n ? "+" : "" : "-") + Math.pow(10, Math.max(0, i)).toString().substr(1) + s
      }
      var N = /(\[[^\[]*\])|(\\)?([Hh]mm(ss)?|Mo|MM?M?M?|Do|DDDo|DD?D?D?|ddd?d?|do?|w[o|w]?|W[o|W]?|Qo?|YYYYYY|YYYYY|YYYY|YY|gg(ggg?)?|GG(GGG?)?|e|E|a|A|hh?|HH?|kk?|mm?|ss?|S{1,9}|x|X|zz?|ZZ?|.)/g,
        G = /(\[[^\[]*\])|(\\)?(LTS|LT|LL?L?L?|l{1,4})/g,
        V = {},
        E = {};

      function I(e, t, n, s) {
        var i = s;
        "string" == typeof s && (i = function() {
          return this[s]()
        }), e && (E[e] = i), t && (E[t[0]] = function() {
          return L(i.apply(this, arguments), t[1], t[2])
        }), n && (E[n] = function() {
          return this.localeData().ordinal(i.apply(this, arguments), e)
        })
      }

      function A(e, t) {
        return e.isValid() ? (t = j(t, e.localeData()), V[t] = V[t] || function(s) {
          var e, i, t, r = s.match(N);
          for (e = 0, i = r.length; e < i; e++) E[r[e]] ? r[e] = E[r[e]] : r[e] = (t = r[e]).match(/\[[\s\S]/) ? t.replace(/^\[|\]$/g, "") : t.replace(/\\/g, "");
          return function(e) {
            var t, n = "";
            for (t = 0; t < i; t++) n += b(r[t]) ? r[t].call(e, s) : r[t];
            return n
          }
        }(t), V[t](e)) : e.localeData().invalidDate()
      }

      function j(e, t) {
        var n = 5;

        function s(e) {
          return t.longDateFormat(e) || e
        }
        for (G.lastIndex = 0; 0 <= n && G.test(e);) e = e.replace(G, s), G.lastIndex = 0, n -= 1;
        return e
      }
      var Z = /\d/,
        z = /\d\d/,
        $ = /\d{3}/,
        q = /\d{4}/,
        J = /[+-]?\d{6}/,
        B = /\d\d?/,
        Q = /\d\d\d\d?/,
        X = /\d\d\d\d\d\d?/,
        K = /\d{1,3}/,
        ee = /\d{1,4}/,
        te = /[+-]?\d{1,6}/,
        ne = /\d+/,
        se = /[+-]?\d+/,
        ie = /Z|[+-]\d\d:?\d\d/gi,
        re = /Z|[+-]\d\d(?::?\d\d)?/gi,
        ae = /[0-9]{0,256}['a-z\u00A0-\u05FF\u0700-\uD7FF\uF900-\uFDCF\uFDF0-\uFF07\uFF10-\uFFEF]{1,256}|[\u0600-\u06FF\/]{1,256}(\s*?[\u0600-\u06FF]{1,256}){1,2}/i,
        oe = {};

      function ue(e, n, s) {
        oe[e] = b(n) ? n : function(e, t) {
          return e && s ? s : n
        }
      }

      function le(e, t) {
        return m(oe, e) ? oe[e](t._strict, t._locale) : new RegExp(he(e.replace("\\", "").replace(/\\(\[)|\\(\])|\[([^\]\[]*)\]|\\(.)/g, function(e, t, n, s, i) {
          return t || n || s || i
        })))
      }

      function he(e) {
        return e.replace(/[-\/\\^$*+?.()|[\]{}]/g, "\\$&")
      }
      var de = {};

      function ce(e, n) {
        var t, s = n;
        for ("string" == typeof e && (e = [e]), h(n) && (s = function(e, t) {
            t[n] = D(e)
          }), t = 0; t < e.length; t++) de[e[t]] = s
      }

      function fe(e, i) {
        ce(e, function(e, t, n, s) {
          n._w = n._w || {}, i(e, n._w, n, s)
        })
      }
      var me = 0,
        _e = 1,
        ye = 2,
        ge = 3,
        ve = 4,
        pe = 5,
        we = 6,
        Me = 7,
        ke = 8;

      function Se(e) {
        return De(e) ? 366 : 365
      }

      function De(e) {
        return e % 4 == 0 && e % 100 != 0 || e % 400 == 0
      }
      I("Y", 0, 0, function() {
        var e = this.year();
        return e <= 9999 ? "" + e : "+" + e
      }), I(0, ["YY", 2], 0, function() {
        return this.year() % 100
      }), I(0, ["YYYY", 4], 0, "year"), I(0, ["YYYYY", 5], 0, "year"), I(0, ["YYYYYY", 6, !0], 0, "year"), C("year", "y"), F("year", 1), ue("Y", se), ue("YY", B, z), ue("YYYY", ee, q), ue("YYYYY", te, J), ue("YYYYYY", te, J), ce(["YYYYY", "YYYYYY"], me), ce("YYYY", function(e, t) {
        t[me] = 2 === e.length ? c.parseTwoDigitYear(e) : D(e)
      }), ce("YY", function(e, t) {
        t[me] = c.parseTwoDigitYear(e)
      }), ce("Y", function(e, t) {
        t[me] = parseInt(e, 10)
      }), c.parseTwoDigitYear = function(e) {
        return D(e) + (68 < D(e) ? 1900 : 2e3)
      };
      var Ye, Oe = Te("FullYear", !0);

      function Te(t, n) {
        return function(e) {
          return null != e ? (xe(this, t, e), c.updateOffset(this, n), this) : be(this, t)
        }
      }

      function be(e, t) {
        return e.isValid() ? e._d["get" + (e._isUTC ? "UTC" : "") + t]() : NaN
      }

      function xe(e, t, n) {
        e.isValid() && !isNaN(n) && ("FullYear" === t && De(e.year()) && 1 === e.month() && 29 === e.date() ? e._d["set" + (e._isUTC ? "UTC" : "") + t](n, e.month(), Pe(n, e.month())) : e._d["set" + (e._isUTC ? "UTC" : "") + t](n))
      }

      function Pe(e, t) {
        if (isNaN(e) || isNaN(t)) return NaN;
        var n, s = (t % (n = 12) + n) % n;
        return e += (t - s) / 12, 1 === s ? De(e) ? 29 : 28 : 31 - s % 7 % 2
      }
      Ye = Array.prototype.indexOf ? Array.prototype.indexOf : function(e) {
        var t;
        for (t = 0; t < this.length; ++t)
          if (this[t] === e) return t;
        return -1
      }, I("M", ["MM", 2], "Mo", function() {
        return this.month() + 1
      }), I("MMM", 0, 0, function(e) {
        return this.localeData().monthsShort(this, e)
      }), I("MMMM", 0, 0, function(e) {
        return this.localeData().months(this, e)
      }), C("month", "M"), F("month", 8), ue("M", B), ue("MM", B, z), ue("MMM", function(e, t) {
        return t.monthsShortRegex(e)
      }), ue("MMMM", function(e, t) {
        return t.monthsRegex(e)
      }), ce(["M", "MM"], function(e, t) {
        t[_e] = D(e) - 1
      }), ce(["MMM", "MMMM"], function(e, t, n, s) {
        var i = n._locale.monthsParse(e, s, n._strict);
        null != i ? t[_e] = i : g(n).invalidMonth = e
      });
      var We = /D[oD]?(\[[^\[\]]*\]|\s)+MMMM?/,
        Ce = "January_February_March_April_May_June_July_August_September_October_November_December".split("_");
      var He = "Jan_Feb_Mar_Apr_May_Jun_Jul_Aug_Sep_Oct_Nov_Dec".split("_");

      function Re(e, t) {
        var n;
        if (!e.isValid()) return e;
        if ("string" == typeof t)
          if (/^\d+$/.test(t)) t = D(t);
          else if (!h(t = e.localeData().monthsParse(t))) return e;
        return n = Math.min(e.date(), Pe(e.year(), t)), e._d["set" + (e._isUTC ? "UTC" : "") + "Month"](t, n), e
      }

      function Ue(e) {
        return null != e ? (Re(this, e), c.updateOffset(this, !0), this) : be(this, "Month")
      }
      var Fe = ae;
      var Le = ae;

      function Ne() {
        function e(e, t) {
          return t.length - e.length
        }
        var t, n, s = [],
          i = [],
          r = [];
        for (t = 0; t < 12; t++) n = y([2e3, t]), s.push(this.monthsShort(n, "")), i.push(this.months(n, "")), r.push(this.months(n, "")), r.push(this.monthsShort(n, ""));
        for (s.sort(e), i.sort(e), r.sort(e), t = 0; t < 12; t++) s[t] = he(s[t]), i[t] = he(i[t]);
        for (t = 0; t < 24; t++) r[t] = he(r[t]);
        this._monthsRegex = new RegExp("^(" + r.join("|") + ")", "i"), this._monthsShortRegex = this._monthsRegex, this._monthsStrictRegex = new RegExp("^(" + i.join("|") + ")", "i"), this._monthsShortStrictRegex = new RegExp("^(" + s.join("|") + ")", "i")
      }

      function Ge(e) {
        var t;
        if (e < 100 && 0 <= e) {
          var n = Array.prototype.slice.call(arguments);
          n[0] = e + 400, t = new Date(Date.UTC.apply(null, n)), isFinite(t.getUTCFullYear()) && t.setUTCFullYear(e)
        } else t = new Date(Date.UTC.apply(null, arguments));
        return t
      }

      function Ve(e, t, n) {
        var s = 7 + t - n;
        return -((7 + Ge(e, 0, s).getUTCDay() - t) % 7) + s - 1
      }

      function Ee(e, t, n, s, i) {
        var r, a, o = 1 + 7 * (t - 1) + (7 + n - s) % 7 + Ve(e, s, i);
        return a = o <= 0 ? Se(r = e - 1) + o : o > Se(e) ? (r = e + 1, o - Se(e)) : (r = e, o), {
          year: r,
          dayOfYear: a
        }
      }

      function Ie(e, t, n) {
        var s, i, r = Ve(e.year(), t, n),
          a = Math.floor((e.dayOfYear() - r - 1) / 7) + 1;
        return a < 1 ? s = a + Ae(i = e.year() - 1, t, n) : a > Ae(e.year(), t, n) ? (s = a - Ae(e.year(), t, n), i = e.year() + 1) : (i = e.year(), s = a), {
          week: s,
          year: i
        }
      }

      function Ae(e, t, n) {
        var s = Ve(e, t, n),
          i = Ve(e + 1, t, n);
        return (Se(e) - s + i) / 7
      }
      I("w", ["ww", 2], "wo", "week"), I("W", ["WW", 2], "Wo", "isoWeek"), C("week", "w"), C("isoWeek", "W"), F("week", 5), F("isoWeek", 5), ue("w", B), ue("ww", B, z), ue("W", B), ue("WW", B, z), fe(["w", "ww", "W", "WW"], function(e, t, n, s) {
        t[s.substr(0, 1)] = D(e)
      });

      function je(e, t) {
        return e.slice(t, 7).concat(e.slice(0, t))
      }
      I("d", 0, "do", "day"), I("dd", 0, 0, function(e) {
        return this.localeData().weekdaysMin(this, e)
      }), I("ddd", 0, 0, function(e) {
        return this.localeData().weekdaysShort(this, e)
      }), I("dddd", 0, 0, function(e) {
        return this.localeData().weekdays(this, e)
      }), I("e", 0, 0, "weekday"), I("E", 0, 0, "isoWeekday"), C("day", "d"), C("weekday", "e"), C("isoWeekday", "E"), F("day", 11), F("weekday", 11), F("isoWeekday", 11), ue("d", B), ue("e", B), ue("E", B), ue("dd", function(e, t) {
        return t.weekdaysMinRegex(e)
      }), ue("ddd", function(e, t) {
        return t.weekdaysShortRegex(e)
      }), ue("dddd", function(e, t) {
        return t.weekdaysRegex(e)
      }), fe(["dd", "ddd", "dddd"], function(e, t, n, s) {
        var i = n._locale.weekdaysParse(e, s, n._strict);
        null != i ? t.d = i : g(n).invalidWeekday = e
      }), fe(["d", "e", "E"], function(e, t, n, s) {
        t[s] = D(e)
      });
      var Ze = "Sunday_Monday_Tuesday_Wednesday_Thursday_Friday_Saturday".split("_");
      var ze = "Sun_Mon_Tue_Wed_Thu_Fri_Sat".split("_");
      var $e = "Su_Mo_Tu_We_Th_Fr_Sa".split("_");
      var qe = ae;
      var Je = ae;
      var Be = ae;

      function Qe() {
        function e(e, t) {
          return t.length - e.length
        }
        var t, n, s, i, r, a = [],
          o = [],
          u = [],
          l = [];
        for (t = 0; t < 7; t++) n = y([2e3, 1]).day(t), s = this.weekdaysMin(n, ""), i = this.weekdaysShort(n, ""), r = this.weekdays(n, ""), a.push(s), o.push(i), u.push(r), l.push(s), l.push(i), l.push(r);
        for (a.sort(e), o.sort(e), u.sort(e), l.sort(e), t = 0; t < 7; t++) o[t] = he(o[t]), u[t] = he(u[t]), l[t] = he(l[t]);
        this._weekdaysRegex = new RegExp("^(" + l.join("|") + ")", "i"), this._weekdaysShortRegex = this._weekdaysRegex, this._weekdaysMinRegex = this._weekdaysRegex, this._weekdaysStrictRegex = new RegExp("^(" + u.join("|") + ")", "i"), this._weekdaysShortStrictRegex = new RegExp("^(" + o.join("|") + ")", "i"), this._weekdaysMinStrictRegex = new RegExp("^(" + a.join("|") + ")", "i")
      }

      function Xe() {
        return this.hours() % 12 || 12
      }

      function Ke(e, t) {
        I(e, 0, 0, function() {
          return this.localeData().meridiem(this.hours(), this.minutes(), t)
        })
      }

      function et(e, t) {
        return t._meridiemParse
      }
      I("H", ["HH", 2], 0, "hour"), I("h", ["hh", 2], 0, Xe), I("k", ["kk", 2], 0, function() {
        return this.hours() || 24
      }), I("hmm", 0, 0, function() {
        return "" + Xe.apply(this) + L(this.minutes(), 2)
      }), I("hmmss", 0, 0, function() {
        return "" + Xe.apply(this) + L(this.minutes(), 2) + L(this.seconds(), 2)
      }), I("Hmm", 0, 0, function() {
        return "" + this.hours() + L(this.minutes(), 2)
      }), I("Hmmss", 0, 0, function() {
        return "" + this.hours() + L(this.minutes(), 2) + L(this.seconds(), 2)
      }), Ke("a", !0), Ke("A", !1), C("hour", "h"), F("hour", 13), ue("a", et), ue("A", et), ue("H", B), ue("h", B), ue("k", B), ue("HH", B, z), ue("hh", B, z), ue("kk", B, z), ue("hmm", Q), ue("hmmss", X), ue("Hmm", Q), ue("Hmmss", X), ce(["H", "HH"], ge), ce(["k", "kk"], function(e, t, n) {
        var s = D(e);
        t[ge] = 24 === s ? 0 : s
      }), ce(["a", "A"], function(e, t, n) {
        n._isPm = n._locale.isPM(e), n._meridiem = e
      }), ce(["h", "hh"], function(e, t, n) {
        t[ge] = D(e), g(n).bigHour = !0
      }), ce("hmm", function(e, t, n) {
        var s = e.length - 2;
        t[ge] = D(e.substr(0, s)), t[ve] = D(e.substr(s)), g(n).bigHour = !0
      }), ce("hmmss", function(e, t, n) {
        var s = e.length - 4,
          i = e.length - 2;
        t[ge] = D(e.substr(0, s)), t[ve] = D(e.substr(s, 2)), t[pe] = D(e.substr(i)), g(n).bigHour = !0
      }), ce("Hmm", function(e, t, n) {
        var s = e.length - 2;
        t[ge] = D(e.substr(0, s)), t[ve] = D(e.substr(s))
      }), ce("Hmmss", function(e, t, n) {
        var s = e.length - 4,
          i = e.length - 2;
        t[ge] = D(e.substr(0, s)), t[ve] = D(e.substr(s, 2)), t[pe] = D(e.substr(i))
      });
      var tt, nt = Te("Hours", !0),
        st = {
          calendar: {
            sameDay: "[Today at] LT",
            nextDay: "[Tomorrow at] LT",
            nextWeek: "dddd [at] LT",
            lastDay: "[Yesterday at] LT",
            lastWeek: "[Last] dddd [at] LT",
            sameElse: "L"
          },
          longDateFormat: {
            LTS: "h:mm:ss A",
            LT: "h:mm A",
            L: "MM/DD/YYYY",
            LL: "MMMM D, YYYY",
            LLL: "MMMM D, YYYY h:mm A",
            LLLL: "dddd, MMMM D, YYYY h:mm A"
          },
          invalidDate: "Invalid date",
          ordinal: "%d",
          dayOfMonthOrdinalParse: /\d{1,2}/,
          relativeTime: {
            future: "in %s",
            past: "%s ago",
            s: "a few seconds",
            ss: "%d seconds",
            m: "a minute",
            mm: "%d minutes",
            h: "an hour",
            hh: "%d hours",
            d: "a day",
            dd: "%d days",
            M: "a month",
            MM: "%d months",
            y: "a year",
            yy: "%d years"
          },
          months: Ce,
          monthsShort: He,
          week: {
            dow: 0,
            doy: 6
          },
          weekdays: Ze,
          weekdaysMin: $e,
          weekdaysShort: ze,
          meridiemParse: /[ap]\.?m?\.?/i
        },
        it = {},
        rt = {};

      function at(e) {
        return e ? e.toLowerCase().replace("_", "-") : e
      }

      function ot(e) {
        var t = null;
        if (!it[e] && "undefined" != typeof module && module && module.exports) try {
          t = tt._abbr, require("./locale/" + e), ut(t)
        } catch (e) {}
        return it[e]
      }

      function ut(e, t) {
        var n;
        return e && ((n = l(t) ? ht(e) : lt(e, t)) ? tt = n : "undefined" != typeof console && console.warn && console.warn("Locale " + e + " not found. Did you forget to load it?")), tt._abbr
      }

      function lt(e, t) {
        if (null === t) return delete it[e], null;
        var n, s = st;
        if (t.abbr = e, null != it[e]) T("defineLocaleOverride", "use moment.updateLocale(localeName, config) to change an existing locale. moment.defineLocale(localeName, config) should only be used for creating a new locale See http://momentjs.com/guides/#/warnings/define-locale/ for more info."), s = it[e]._config;
        else if (null != t.parentLocale)
          if (null != it[t.parentLocale]) s = it[t.parentLocale]._config;
          else {
            if (null == (n = ot(t.parentLocale))) return rt[t.parentLocale] || (rt[t.parentLocale] = []), rt[t.parentLocale].push({
              name: e,
              config: t
            }), null;
            s = n._config
          } return it[e] = new P(x(s, t)), rt[e] && rt[e].forEach(function(e) {
          lt(e.name, e.config)
        }), ut(e), it[e]
      }

      function ht(e) {
        var t;
        if (e && e._locale && e._locale._abbr && (e = e._locale._abbr), !e) return tt;
        if (!o(e)) {
          if (t = ot(e)) return t;
          e = [e]
        }
        return function(e) {
          for (var t, n, s, i, r = 0; r < e.length;) {
            for (t = (i = at(e[r]).split("-")).length, n = (n = at(e[r + 1])) ? n.split("-") : null; 0 < t;) {
              if (s = ot(i.slice(0, t).join("-"))) return s;
              if (n && n.length >= t && a(i, n, !0) >= t - 1) break;
              t--
            }
            r++
          }
          return tt
        }(e)
      }

      function dt(e) {
        var t, n = e._a;
        return n && -2 === g(e).overflow && (t = n[_e] < 0 || 11 < n[_e] ? _e : n[ye] < 1 || n[ye] > Pe(n[me], n[_e]) ? ye : n[ge] < 0 || 24 < n[ge] || 24 === n[ge] && (0 !== n[ve] || 0 !== n[pe] || 0 !== n[we]) ? ge : n[ve] < 0 || 59 < n[ve] ? ve : n[pe] < 0 || 59 < n[pe] ? pe : n[we] < 0 || 999 < n[we] ? we : -1, g(e)._overflowDayOfYear && (t < me || ye < t) && (t = ye), g(e)._overflowWeeks && -1 === t && (t = Me), g(e)._overflowWeekday && -1 === t && (t = ke), g(e).overflow = t), e
      }

      function ct(e, t, n) {
        return null != e ? e : null != t ? t : n
      }

      function ft(e) {
        var t, n, s, i, r, a = [];
        if (!e._d) {
          var o, u;
          for (o = e, u = new Date(c.now()), s = o._useUTC ? [u.getUTCFullYear(), u.getUTCMonth(), u.getUTCDate()] : [u.getFullYear(), u.getMonth(), u.getDate()], e._w && null == e._a[ye] && null == e._a[_e] && function(e) {
              var t, n, s, i, r, a, o, u;
              if (null != (t = e._w).GG || null != t.W || null != t.E) r = 1, a = 4, n = ct(t.GG, e._a[me], Ie(bt(), 1, 4).year), s = ct(t.W, 1), ((i = ct(t.E, 1)) < 1 || 7 < i) && (u = !0);
              else {
                r = e._locale._week.dow, a = e._locale._week.doy;
                var l = Ie(bt(), r, a);
                n = ct(t.gg, e._a[me], l.year), s = ct(t.w, l.week), null != t.d ? ((i = t.d) < 0 || 6 < i) && (u = !0) : null != t.e ? (i = t.e + r, (t.e < 0 || 6 < t.e) && (u = !0)) : i = r
              }
              s < 1 || s > Ae(n, r, a) ? g(e)._overflowWeeks = !0 : null != u ? g(e)._overflowWeekday = !0 : (o = Ee(n, s, i, r, a), e._a[me] = o.year, e._dayOfYear = o.dayOfYear)
            }(e), null != e._dayOfYear && (r = ct(e._a[me], s[me]), (e._dayOfYear > Se(r) || 0 === e._dayOfYear) && (g(e)._overflowDayOfYear = !0), n = Ge(r, 0, e._dayOfYear), e._a[_e] = n.getUTCMonth(), e._a[ye] = n.getUTCDate()), t = 0; t < 3 && null == e._a[t]; ++t) e._a[t] = a[t] = s[t];
          for (; t < 7; t++) e._a[t] = a[t] = null == e._a[t] ? 2 === t ? 1 : 0 : e._a[t];
          24 === e._a[ge] && 0 === e._a[ve] && 0 === e._a[pe] && 0 === e._a[we] && (e._nextDay = !0, e._a[ge] = 0), e._d = (e._useUTC ? Ge : function(e, t, n, s, i, r, a) {
            var o;
            return e < 100 && 0 <= e ? (o = new Date(e + 400, t, n, s, i, r, a), isFinite(o.getFullYear()) && o.setFullYear(e)) : o = new Date(e, t, n, s, i, r, a), o
          }).apply(null, a), i = e._useUTC ? e._d.getUTCDay() : e._d.getDay(), null != e._tzm && e._d.setUTCMinutes(e._d.getUTCMinutes() - e._tzm), e._nextDay && (e._a[ge] = 24), e._w && void 0 !== e._w.d && e._w.d !== i && (g(e).weekdayMismatch = !0)
        }
      }
      var mt = /^\s*((?:[+-]\d{6}|\d{4})-(?:\d\d-\d\d|W\d\d-\d|W\d\d|\d\d\d|\d\d))(?:(T| )(\d\d(?::\d\d(?::\d\d(?:[.,]\d+)?)?)?)([\+\-]\d\d(?::?\d\d)?|\s*Z)?)?$/,
        _t = /^\s*((?:[+-]\d{6}|\d{4})(?:\d\d\d\d|W\d\d\d|W\d\d|\d\d\d|\d\d))(?:(T| )(\d\d(?:\d\d(?:\d\d(?:[.,]\d+)?)?)?)([\+\-]\d\d(?::?\d\d)?|\s*Z)?)?$/,
        yt = /Z|[+-]\d\d(?::?\d\d)?/,
        gt = [
          ["YYYYYY-MM-DD", /[+-]\d{6}-\d\d-\d\d/],
          ["YYYY-MM-DD", /\d{4}-\d\d-\d\d/],
          ["GGGG-[W]WW-E", /\d{4}-W\d\d-\d/],
          ["GGGG-[W]WW", /\d{4}-W\d\d/, !1],
          ["YYYY-DDD", /\d{4}-\d{3}/],
          ["YYYY-MM", /\d{4}-\d\d/, !1],
          ["YYYYYYMMDD", /[+-]\d{10}/],
          ["YYYYMMDD", /\d{8}/],
          ["GGGG[W]WWE", /\d{4}W\d{3}/],
          ["GGGG[W]WW", /\d{4}W\d{2}/, !1],
          ["YYYYDDD", /\d{7}/]
        ],
        vt = [
          ["HH:mm:ss.SSSS", /\d\d:\d\d:\d\d\.\d+/],
          ["HH:mm:ss,SSSS", /\d\d:\d\d:\d\d,\d+/],
          ["HH:mm:ss", /\d\d:\d\d:\d\d/],
          ["HH:mm", /\d\d:\d\d/],
          ["HHmmss.SSSS", /\d\d\d\d\d\d\.\d+/],
          ["HHmmss,SSSS", /\d\d\d\d\d\d,\d+/],
          ["HHmmss", /\d\d\d\d\d\d/],
          ["HHmm", /\d\d\d\d/],
          ["HH", /\d\d/]
        ],
        pt = /^\/?Date\((\-?\d+)/i;

      function wt(e) {
        var t, n, s, i, r, a, o = e._i,
          u = mt.exec(o) || _t.exec(o);
        if (u) {
          for (g(e).iso = !0, t = 0, n = gt.length; t < n; t++)
            if (gt[t][1].exec(u[1])) {
              i = gt[t][0], s = !1 !== gt[t][2];
              break
            } if (null == i) return void(e._isValid = !1);
          if (u[3]) {
            for (t = 0, n = vt.length; t < n; t++)
              if (vt[t][1].exec(u[3])) {
                r = (u[2] || " ") + vt[t][0];
                break
              } if (null == r) return void(e._isValid = !1)
          }
          if (!s && null != r) return void(e._isValid = !1);
          if (u[4]) {
            if (!yt.exec(u[4])) return void(e._isValid = !1);
            a = "Z"
          }
          e._f = i + (r || "") + (a || ""), Yt(e)
        } else e._isValid = !1
      }
      var Mt = /^(?:(Mon|Tue|Wed|Thu|Fri|Sat|Sun),?\s)?(\d{1,2})\s(Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec)\s(\d{2,4})\s(\d\d):(\d\d)(?::(\d\d))?\s(?:(UT|GMT|[ECMP][SD]T)|([Zz])|([+-]\d{4}))$/;

      function kt(e, t, n, s, i, r) {
        var a = [function(e) {
          var t = parseInt(e, 10); {
            if (t <= 49) return 2e3 + t;
            if (t <= 999) return 1900 + t
          }
          return t
        }(e), He.indexOf(t), parseInt(n, 10), parseInt(s, 10), parseInt(i, 10)];
        return r && a.push(parseInt(r, 10)), a
      }
      var St = {
        UT: 0,
        GMT: 0,
        EDT: -240,
        EST: -300,
        CDT: -300,
        CST: -360,
        MDT: -360,
        MST: -420,
        PDT: -420,
        PST: -480
      };

      function Dt(e) {
        var t, n, s, i = Mt.exec(e._i.replace(/\([^)]*\)|[\n\t]/g, " ").replace(/(\s\s+)/g, " ").replace(/^\s\s*/, "").replace(/\s\s*$/, ""));
        if (i) {
          var r = kt(i[4], i[3], i[2], i[5], i[6], i[7]);
          if (t = i[1], n = r, s = e, t && ze.indexOf(t) !== new Date(n[0], n[1], n[2]).getDay() && (g(s).weekdayMismatch = !0, !(s._isValid = !1))) return;
          e._a = r, e._tzm = function(e, t, n) {
            if (e) return St[e];
            if (t) return 0;
            var s = parseInt(n, 10),
              i = s % 100;
            return (s - i) / 100 * 60 + i
          }(i[8], i[9], i[10]), e._d = Ge.apply(null, e._a), e._d.setUTCMinutes(e._d.getUTCMinutes() - e._tzm), g(e).rfc2822 = !0
        } else e._isValid = !1
      }

      function Yt(e) {
        if (e._f !== c.ISO_8601)
          if (e._f !== c.RFC_2822) {
            e._a = [], g(e).empty = !0;
            var t, n, s, i, r, a, o, u, l = "" + e._i,
              h = l.length,
              d = 0;
            for (s = j(e._f, e._locale).match(N) || [], t = 0; t < s.length; t++) i = s[t], (n = (l.match(le(i, e)) || [])[0]) && (0 < (r = l.substr(0, l.indexOf(n))).length && g(e).unusedInput.push(r), l = l.slice(l.indexOf(n) + n.length), d += n.length), E[i] ? (n ? g(e).empty = !1 : g(e).unusedTokens.push(i), a = i, u = e, null != (o = n) && m(de, a) && de[a](o, u._a, u, a)) : e._strict && !n && g(e).unusedTokens.push(i);
            g(e).charsLeftOver = h - d, 0 < l.length && g(e).unusedInput.push(l), e._a[ge] <= 12 && !0 === g(e).bigHour && 0 < e._a[ge] && (g(e).bigHour = void 0), g(e).parsedDateParts = e._a.slice(0), g(e).meridiem = e._meridiem, e._a[ge] = function(e, t, n) {
              var s;
              if (null == n) return t;
              return null != e.meridiemHour ? e.meridiemHour(t, n) : (null != e.isPM && ((s = e.isPM(n)) && t < 12 && (t += 12), s || 12 !== t || (t = 0)), t)
            }(e._locale, e._a[ge], e._meridiem), ft(e), dt(e)
          } else Dt(e);
        else wt(e)
      }

      function Ot(e) {
        var t, n, s, i, r = e._i,
          a = e._f;
        return e._locale = e._locale || ht(e._l), null === r || void 0 === a && "" === r ? p({
          nullInput: !0
        }) : ("string" == typeof r && (e._i = r = e._locale.preparse(r)), k(r) ? new M(dt(r)) : (d(r) ? e._d = r : o(a) ? function(e) {
          var t, n, s, i, r;
          if (0 === e._f.length) return g(e).invalidFormat = !0, e._d = new Date(NaN);
          for (i = 0; i < e._f.length; i++) r = 0, t = w({}, e), null != e._useUTC && (t._useUTC = e._useUTC), t._f = e._f[i], Yt(t), v(t) && (r += g(t).charsLeftOver, r += 10 * g(t).unusedTokens.length, g(t).score = r, (null == s || r < s) && (s = r, n = t));
          _(e, n || t)
        }(e) : a ? Yt(e) : l(n = (t = e)._i) ? t._d = new Date(c.now()) : d(n) ? t._d = new Date(n.valueOf()) : "string" == typeof n ? (s = t, null === (i = pt.exec(s._i)) ? (wt(s), !1 === s._isValid && (delete s._isValid, Dt(s), !1 === s._isValid && (delete s._isValid, c.createFromInputFallback(s)))) : s._d = new Date(+i[1])) : o(n) ? (t._a = f(n.slice(0), function(e) {
          return parseInt(e, 10)
        }), ft(t)) : u(n) ? function(e) {
          if (!e._d) {
            var t = R(e._i);
            e._a = f([t.year, t.month, t.day || t.date, t.hour, t.minute, t.second, t.millisecond], function(e) {
              return e && parseInt(e, 10)
            }), ft(e)
          }
        }(t) : h(n) ? t._d = new Date(n) : c.createFromInputFallback(t), v(e) || (e._d = null), e))
      }

      function Tt(e, t, n, s, i) {
        var r, a = {};
        return !0 !== n && !1 !== n || (s = n, n = void 0), (u(e) && function(e) {
          if (Object.getOwnPropertyNames) return 0 === Object.getOwnPropertyNames(e).length;
          var t;
          for (t in e)
            if (e.hasOwnProperty(t)) return !1;
          return !0
        }(e) || o(e) && 0 === e.length) && (e = void 0), a._isAMomentObject = !0, a._useUTC = a._isUTC = i, a._l = n, a._i = e, a._f = t, a._strict = s, (r = new M(dt(Ot(a))))._nextDay && (r.add(1, "d"), r._nextDay = void 0), r
      }

      function bt(e, t, n, s) {
        return Tt(e, t, n, s, !1)
      }
      c.createFromInputFallback = n("value provided is not in a recognized RFC2822 or ISO format. moment construction falls back to js Date(), which is not reliable across all browsers and versions. Non RFC2822/ISO date formats are discouraged and will be removed in an upcoming major release. Please refer to http://momentjs.com/guides/#/warnings/js-date/ for more info.", function(e) {
        e._d = new Date(e._i + (e._useUTC ? " UTC" : ""))
      }), c.ISO_8601 = function() {}, c.RFC_2822 = function() {};
      var xt = n("moment().min is deprecated, use moment.max instead. http://momentjs.com/guides/#/warnings/min-max/", function() {
          var e = bt.apply(null, arguments);
          return this.isValid() && e.isValid() ? e < this ? this : e : p()
        }),
        Pt = n("moment().max is deprecated, use moment.min instead. http://momentjs.com/guides/#/warnings/min-max/", function() {
          var e = bt.apply(null, arguments);
          return this.isValid() && e.isValid() ? this < e ? this : e : p()
        });

      function Wt(e, t) {
        var n, s;
        if (1 === t.length && o(t[0]) && (t = t[0]), !t.length) return bt();
        for (n = t[0], s = 1; s < t.length; ++s) t[s].isValid() && !t[s][e](n) || (n = t[s]);
        return n
      }
      var Ct = ["year", "quarter", "month", "week", "day", "hour", "minute", "second", "millisecond"];

      function Ht(e) {
        var t = R(e),
          n = t.year || 0,
          s = t.quarter || 0,
          i = t.month || 0,
          r = t.week || t.isoWeek || 0,
          a = t.day || 0,
          o = t.hour || 0,
          u = t.minute || 0,
          l = t.second || 0,
          h = t.millisecond || 0;
        this._isValid = function(e) {
          for (var t in e)
            if (-1 === Ye.call(Ct, t) || null != e[t] && isNaN(e[t])) return !1;
          for (var n = !1, s = 0; s < Ct.length; ++s)
            if (e[Ct[s]]) {
              if (n) return !1;
              parseFloat(e[Ct[s]]) !== D(e[Ct[s]]) && (n = !0)
            } return !0
        }(t), this._milliseconds = +h + 1e3 * l + 6e4 * u + 1e3 * o * 60 * 60, this._days = +a + 7 * r, this._months = +i + 3 * s + 12 * n, this._data = {}, this._locale = ht(), this._bubble()
      }

      function Rt(e) {
        return e instanceof Ht
      }

      function Ut(e) {
        return e < 0 ? -1 * Math.round(-1 * e) : Math.round(e)
      }

      function Ft(e, n) {
        I(e, 0, 0, function() {
          var e = this.utcOffset(),
            t = "+";
          return e < 0 && (e = -e, t = "-"), t + L(~~(e / 60), 2) + n + L(~~e % 60, 2)
        })
      }
      Ft("Z", ":"), Ft("ZZ", ""), ue("Z", re), ue("ZZ", re), ce(["Z", "ZZ"], function(e, t, n) {
        n._useUTC = !0, n._tzm = Nt(re, e)
      });
      var Lt = /([\+\-]|\d\d)/gi;

      function Nt(e, t) {
        var n = (t || "").match(e);
        if (null === n) return null;
        var s = ((n[n.length - 1] || []) + "").match(Lt) || ["-", 0, 0],
          i = 60 * s[1] + D(s[2]);
        return 0 === i ? 0 : "+" === s[0] ? i : -i
      }

      function Gt(e, t) {
        var n, s;
        return t._isUTC ? (n = t.clone(), s = (k(e) || d(e) ? e.valueOf() : bt(e).valueOf()) - n.valueOf(), n._d.setTime(n._d.valueOf() + s), c.updateOffset(n, !1), n) : bt(e).local()
      }

      function Vt(e) {
        return 15 * -Math.round(e._d.getTimezoneOffset() / 15)
      }

      function Et() {
        return !!this.isValid() && (this._isUTC && 0 === this._offset)
      }
      c.updateOffset = function() {};
      var It = /^(\-|\+)?(?:(\d*)[. ])?(\d+)\:(\d+)(?:\:(\d+)(\.\d*)?)?$/,
        At = /^(-|\+)?P(?:([-+]?[0-9,.]*)Y)?(?:([-+]?[0-9,.]*)M)?(?:([-+]?[0-9,.]*)W)?(?:([-+]?[0-9,.]*)D)?(?:T(?:([-+]?[0-9,.]*)H)?(?:([-+]?[0-9,.]*)M)?(?:([-+]?[0-9,.]*)S)?)?$/;

      function jt(e, t) {
        var n, s, i, r = e,
          a = null;
        return Rt(e) ? r = {
          ms: e._milliseconds,
          d: e._days,
          M: e._months
        } : h(e) ? (r = {}, t ? r[t] = e : r.milliseconds = e) : (a = It.exec(e)) ? (n = "-" === a[1] ? -1 : 1, r = {
          y: 0,
          d: D(a[ye]) * n,
          h: D(a[ge]) * n,
          m: D(a[ve]) * n,
          s: D(a[pe]) * n,
          ms: D(Ut(1e3 * a[we])) * n
        }) : (a = At.exec(e)) ? (n = "-" === a[1] ? -1 : 1, r = {
          y: Zt(a[2], n),
          M: Zt(a[3], n),
          w: Zt(a[4], n),
          d: Zt(a[5], n),
          h: Zt(a[6], n),
          m: Zt(a[7], n),
          s: Zt(a[8], n)
        }) : null == r ? r = {} : "object" == typeof r && ("from" in r || "to" in r) && (i = function(e, t) {
          var n;
          if (!e.isValid() || !t.isValid()) return {
            milliseconds: 0,
            months: 0
          };
          t = Gt(t, e), e.isBefore(t) ? n = zt(e, t) : ((n = zt(t, e)).milliseconds = -n.milliseconds, n.months = -n.months);
          return n
        }(bt(r.from), bt(r.to)), (r = {}).ms = i.milliseconds, r.M = i.months), s = new Ht(r), Rt(e) && m(e, "_locale") && (s._locale = e._locale), s
      }

      function Zt(e, t) {
        var n = e && parseFloat(e.replace(",", "."));
        return (isNaN(n) ? 0 : n) * t
      }

      function zt(e, t) {
        var n = {};
        return n.months = t.month() - e.month() + 12 * (t.year() - e.year()), e.clone().add(n.months, "M").isAfter(t) && --n.months, n.milliseconds = +t - +e.clone().add(n.months, "M"), n
      }

      function $t(s, i) {
        return function(e, t) {
          var n;
          return null === t || isNaN(+t) || (T(i, "moment()." + i + "(period, number) is deprecated. Please use moment()." + i + "(number, period). See http://momentjs.com/guides/#/warnings/add-inverted-param/ for more info."), n = e, e = t, t = n), qt(this, jt(e = "string" == typeof e ? +e : e, t), s), this
        }
      }

      function qt(e, t, n, s) {
        var i = t._milliseconds,
          r = Ut(t._days),
          a = Ut(t._months);
        e.isValid() && (s = null == s || s, a && Re(e, be(e, "Month") + a * n), r && xe(e, "Date", be(e, "Date") + r * n), i && e._d.setTime(e._d.valueOf() + i * n), s && c.updateOffset(e, r || a))
      }
      jt.fn = Ht.prototype, jt.invalid = function() {
        return jt(NaN)
      };
      var Jt = $t(1, "add"),
        Bt = $t(-1, "subtract");

      function Qt(e, t) {
        var n = 12 * (t.year() - e.year()) + (t.month() - e.month()),
          s = e.clone().add(n, "months");
        return -(n + (t - s < 0 ? (t - s) / (s - e.clone().add(n - 1, "months")) : (t - s) / (e.clone().add(n + 1, "months") - s))) || 0
      }

      function Xt(e) {
        var t;
        return void 0 === e ? this._locale._abbr : (null != (t = ht(e)) && (this._locale = t), this)
      }
      c.defaultFormat = "YYYY-MM-DDTHH:mm:ssZ", c.defaultFormatUtc = "YYYY-MM-DDTHH:mm:ss[Z]";
      var Kt = n("moment().lang() is deprecated. Instead, use moment().localeData() to get the language configuration. Use moment().locale() to change languages.", function(e) {
        return void 0 === e ? this.localeData() : this.locale(e)
      });

      function en() {
        return this._locale
      }
      var tn = 126227808e5;

      function nn(e, t) {
        return (e % t + t) % t
      }

      function sn(e, t, n) {
        return e < 100 && 0 <= e ? new Date(e + 400, t, n) - tn : new Date(e, t, n).valueOf()
      }

      function rn(e, t, n) {
        return e < 100 && 0 <= e ? Date.UTC(e + 400, t, n) - tn : Date.UTC(e, t, n)
      }

      function an(e, t) {
        I(0, [e, e.length], 0, t)
      }

      function on(e, t, n, s, i) {
        var r;
        return null == e ? Ie(this, s, i).year : ((r = Ae(e, s, i)) < t && (t = r), function(e, t, n, s, i) {
          var r = Ee(e, t, n, s, i),
            a = Ge(r.year, 0, r.dayOfYear);
          return this.year(a.getUTCFullYear()), this.month(a.getUTCMonth()), this.date(a.getUTCDate()), this
        }.call(this, e, t, n, s, i))
      }
      I(0, ["gg", 2], 0, function() {
        return this.weekYear() % 100
      }), I(0, ["GG", 2], 0, function() {
        return this.isoWeekYear() % 100
      }), an("gggg", "weekYear"), an("ggggg", "weekYear"), an("GGGG", "isoWeekYear"), an("GGGGG", "isoWeekYear"), C("weekYear", "gg"), C("isoWeekYear", "GG"), F("weekYear", 1), F("isoWeekYear", 1), ue("G", se), ue("g", se), ue("GG", B, z), ue("gg", B, z), ue("GGGG", ee, q), ue("gggg", ee, q), ue("GGGGG", te, J), ue("ggggg", te, J), fe(["gggg", "ggggg", "GGGG", "GGGGG"], function(e, t, n, s) {
        t[s.substr(0, 2)] = D(e)
      }), fe(["gg", "GG"], function(e, t, n, s) {
        t[s] = c.parseTwoDigitYear(e)
      }), I("Q", 0, "Qo", "quarter"), C("quarter", "Q"), F("quarter", 7), ue("Q", Z), ce("Q", function(e, t) {
        t[_e] = 3 * (D(e) - 1)
      }), I("D", ["DD", 2], "Do", "date"), C("date", "D"), F("date", 9), ue("D", B), ue("DD", B, z), ue("Do", function(e, t) {
        return e ? t._dayOfMonthOrdinalParse || t._ordinalParse : t._dayOfMonthOrdinalParseLenient
      }), ce(["D", "DD"], ye), ce("Do", function(e, t) {
        t[ye] = D(e.match(B)[0])
      });
      var un = Te("Date", !0);
      I("DDD", ["DDDD", 3], "DDDo", "dayOfYear"), C("dayOfYear", "DDD"), F("dayOfYear", 4), ue("DDD", K), ue("DDDD", $), ce(["DDD", "DDDD"], function(e, t, n) {
        n._dayOfYear = D(e)
      }), I("m", ["mm", 2], 0, "minute"), C("minute", "m"), F("minute", 14), ue("m", B), ue("mm", B, z), ce(["m", "mm"], ve);
      var ln = Te("Minutes", !1);
      I("s", ["ss", 2], 0, "second"), C("second", "s"), F("second", 15), ue("s", B), ue("ss", B, z), ce(["s", "ss"], pe);
      var hn, dn = Te("Seconds", !1);
      for (I("S", 0, 0, function() {
          return ~~(this.millisecond() / 100)
        }), I(0, ["SS", 2], 0, function() {
          return ~~(this.millisecond() / 10)
        }), I(0, ["SSS", 3], 0, "millisecond"), I(0, ["SSSS", 4], 0, function() {
          return 10 * this.millisecond()
        }), I(0, ["SSSSS", 5], 0, function() {
          return 100 * this.millisecond()
        }), I(0, ["SSSSSS", 6], 0, function() {
          return 1e3 * this.millisecond()
        }), I(0, ["SSSSSSS", 7], 0, function() {
          return 1e4 * this.millisecond()
        }), I(0, ["SSSSSSSS", 8], 0, function() {
          return 1e5 * this.millisecond()
        }), I(0, ["SSSSSSSSS", 9], 0, function() {
          return 1e6 * this.millisecond()
        }), C("millisecond", "ms"), F("millisecond", 16), ue("S", K, Z), ue("SS", K, z), ue("SSS", K, $), hn = "SSSS"; hn.length <= 9; hn += "S") ue(hn, ne);

      function cn(e, t) {
        t[we] = D(1e3 * ("0." + e))
      }
      for (hn = "S"; hn.length <= 9; hn += "S") ce(hn, cn);
      var fn = Te("Milliseconds", !1);
      I("z", 0, 0, "zoneAbbr"), I("zz", 0, 0, "zoneName");
      var mn = M.prototype;

      function _n(e) {
        return e
      }
      mn.add = Jt, mn.calendar = function(e, t) {
        var n = e || bt(),
          s = Gt(n, this).startOf("day"),
          i = c.calendarFormat(this, s) || "sameElse",
          r = t && (b(t[i]) ? t[i].call(this, n) : t[i]);
        return this.format(r || this.localeData().calendar(i, this, bt(n)))
      }, mn.clone = function() {
        return new M(this)
      }, mn.diff = function(e, t, n) {
        var s, i, r;
        if (!this.isValid()) return NaN;
        if (!(s = Gt(e, this)).isValid()) return NaN;
        switch (i = 6e4 * (s.utcOffset() - this.utcOffset()), t = H(t)) {
          case "year":
            r = Qt(this, s) / 12;
            break;
          case "month":
            r = Qt(this, s);
            break;
          case "quarter":
            r = Qt(this, s) / 3;
            break;
          case "second":
            r = (this - s) / 1e3;
            break;
          case "minute":
            r = (this - s) / 6e4;
            break;
          case "hour":
            r = (this - s) / 36e5;
            break;
          case "day":
            r = (this - s - i) / 864e5;
            break;
          case "week":
            r = (this - s - i) / 6048e5;
            break;
          default:
            r = this - s
        }
        return n ? r : S(r)
      }, mn.endOf = function(e) {
        var t;
        if (void 0 === (e = H(e)) || "millisecond" === e || !this.isValid()) return this;
        var n = this._isUTC ? rn : sn;
        switch (e) {
          case "year":
            t = n(this.year() + 1, 0, 1) - 1;
            break;
          case "quarter":
            t = n(this.year(), this.month() - this.month() % 3 + 3, 1) - 1;
            break;
          case "month":
            t = n(this.year(), this.month() + 1, 1) - 1;
            break;
          case "week":
            t = n(this.year(), this.month(), this.date() - this.weekday() + 7) - 1;
            break;
          case "isoWeek":
            t = n(this.year(), this.month(), this.date() - (this.isoWeekday() - 1) + 7) - 1;
            break;
          case "day":
          case "date":
            t = n(this.year(), this.month(), this.date() + 1) - 1;
            break;
          case "hour":
            t = this._d.valueOf(), t += 36e5 - nn(t + (this._isUTC ? 0 : 6e4 * this.utcOffset()), 36e5) - 1;
            break;
          case "minute":
            t = this._d.valueOf(), t += 6e4 - nn(t, 6e4) - 1;
            break;
          case "second":
            t = this._d.valueOf(), t += 1e3 - nn(t, 1e3) - 1;
            break
        }
        return this._d.setTime(t), c.updateOffset(this, !0), this
      }, mn.format = function(e) {
        e || (e = this.isUtc() ? c.defaultFormatUtc : c.defaultFormat);
        var t = A(this, e);
        return this.localeData().postformat(t)
      }, mn.from = function(e, t) {
        return this.isValid() && (k(e) && e.isValid() || bt(e).isValid()) ? jt({
          to: this,
          from: e
        }).locale(this.locale()).humanize(!t) : this.localeData().invalidDate()
      }, mn.fromNow = function(e) {
        return this.from(bt(), e)
      }, mn.to = function(e, t) {
        return this.isValid() && (k(e) && e.isValid() || bt(e).isValid()) ? jt({
          from: this,
          to: e
        }).locale(this.locale()).humanize(!t) : this.localeData().invalidDate()
      }, mn.toNow = function(e) {
        return this.to(bt(), e)
      }, mn.get = function(e) {
        return b(this[e = H(e)]) ? this[e]() : this
      }, mn.invalidAt = function() {
        return g(this).overflow
      }, mn.isAfter = function(e, t) {
        var n = k(e) ? e : bt(e);
        return !(!this.isValid() || !n.isValid()) && ("millisecond" === (t = H(t) || "millisecond") ? this.valueOf() > n.valueOf() : n.valueOf() < this.clone().startOf(t).valueOf())
      }, mn.isBefore = function(e, t) {
        var n = k(e) ? e : bt(e);
        return !(!this.isValid() || !n.isValid()) && ("millisecond" === (t = H(t) || "millisecond") ? this.valueOf() < n.valueOf() : this.clone().endOf(t).valueOf() < n.valueOf())
      }, mn.isBetween = function(e, t, n, s) {
        var i = k(e) ? e : bt(e),
          r = k(t) ? t : bt(t);
        return !!(this.isValid() && i.isValid() && r.isValid()) && ("(" === (s = s || "()")[0] ? this.isAfter(i, n) : !this.isBefore(i, n)) && (")" === s[1] ? this.isBefore(r, n) : !this.isAfter(r, n))
      }, mn.isSame = function(e, t) {
        var n, s = k(e) ? e : bt(e);
        return !(!this.isValid() || !s.isValid()) && ("millisecond" === (t = H(t) || "millisecond") ? this.valueOf() === s.valueOf() : (n = s.valueOf(), this.clone().startOf(t).valueOf() <= n && n <= this.clone().endOf(t).valueOf()))
      }, mn.isSameOrAfter = function(e, t) {
        return this.isSame(e, t) || this.isAfter(e, t)
      }, mn.isSameOrBefore = function(e, t) {
        return this.isSame(e, t) || this.isBefore(e, t)
      }, mn.isValid = function() {
        return v(this)
      }, mn.lang = Kt, mn.locale = Xt, mn.localeData = en, mn.max = Pt, mn.min = xt, mn.parsingFlags = function() {
        return _({}, g(this))
      }, mn.set = function(e, t) {
        if ("object" == typeof e)
          for (var n = function(e) {
              var t = [];
              for (var n in e) t.push({
                unit: n,
                priority: U[n]
              });
              return t.sort(function(e, t) {
                return e.priority - t.priority
              }), t
            }(e = R(e)), s = 0; s < n.length; s++) this[n[s].unit](e[n[s].unit]);
        else if (b(this[e = H(e)])) return this[e](t);
        return this
      }, mn.startOf = function(e) {
        var t;
        if (void 0 === (e = H(e)) || "millisecond" === e || !this.isValid()) return this;
        var n = this._isUTC ? rn : sn;
        switch (e) {
          case "year":
            t = n(this.year(), 0, 1);
            break;
          case "quarter":
            t = n(this.year(), this.month() - this.month() % 3, 1);
            break;
          case "month":
            t = n(this.year(), this.month(), 1);
            break;
          case "week":
            t = n(this.year(), this.month(), this.date() - this.weekday());
            break;
          case "isoWeek":
            t = n(this.year(), this.month(), this.date() - (this.isoWeekday() - 1));
            break;
          case "day":
          case "date":
            t = n(this.year(), this.month(), this.date());
            break;
          case "hour":
            t = this._d.valueOf(), t -= nn(t + (this._isUTC ? 0 : 6e4 * this.utcOffset()), 36e5);
            break;
          case "minute":
            t = this._d.valueOf(), t -= nn(t, 6e4);
            break;
          case "second":
            t = this._d.valueOf(), t -= nn(t, 1e3);
            break
        }
        return this._d.setTime(t), c.updateOffset(this, !0), this
      }, mn.subtract = Bt, mn.toArray = function() {
        var e = this;
        return [e.year(), e.month(), e.date(), e.hour(), e.minute(), e.second(), e.millisecond()]
      }, mn.toObject = function() {
        var e = this;
        return {
          years: e.year(),
          months: e.month(),
          date: e.date(),
          hours: e.hours(),
          minutes: e.minutes(),
          seconds: e.seconds(),
          milliseconds: e.milliseconds()
        }
      }, mn.toDate = function() {
        return new Date(this.valueOf())
      }, mn.toISOString = function(e) {
        if (!this.isValid()) return null;
        var t = !0 !== e,
          n = t ? this.clone().utc() : this;
        return n.year() < 0 || 9999 < n.year() ? A(n, t ? "YYYYYY-MM-DD[T]HH:mm:ss.SSS[Z]" : "YYYYYY-MM-DD[T]HH:mm:ss.SSSZ") : b(Date.prototype.toISOString) ? t ? this.toDate().toISOString() : new Date(this.valueOf() + 60 * this.utcOffset() * 1e3).toISOString().replace("Z", A(n, "Z")) : A(n, t ? "YYYY-MM-DD[T]HH:mm:ss.SSS[Z]" : "YYYY-MM-DD[T]HH:mm:ss.SSSZ")
      }, mn.inspect = function() {
        if (!this.isValid()) return "moment.invalid(/* " + this._i + " */)";
        var e = "moment",
          t = "";
        this.isLocal() || (e = 0 === this.utcOffset() ? "moment.utc" : "moment.parseZone", t = "Z");
        var n = "[" + e + '("]',
          s = 0 <= this.year() && this.year() <= 9999 ? "YYYY" : "YYYYYY",
          i = t + '[")]';
        return this.format(n + s + "-MM-DD[T]HH:mm:ss.SSS" + i)
      }, mn.toJSON = function() {
        return this.isValid() ? this.toISOString() : null
      }, mn.toString = function() {
        return this.clone().locale("en").format("ddd MMM DD YYYY HH:mm:ss [GMT]ZZ")
      }, mn.unix = function() {
        return Math.floor(this.valueOf() / 1e3)
      }, mn.valueOf = function() {
        return this._d.valueOf() - 6e4 * (this._offset || 0)
      }, mn.creationData = function() {
        return {
          input: this._i,
          format: this._f,
          locale: this._locale,
          isUTC: this._isUTC,
          strict: this._strict
        }
      }, mn.year = Oe, mn.isLeapYear = function() {
        return De(this.year())
      }, mn.weekYear = function(e) {
        return on.call(this, e, this.week(), this.weekday(), this.localeData()._week.dow, this.localeData()._week.doy)
      }, mn.isoWeekYear = function(e) {
        return on.call(this, e, this.isoWeek(), this.isoWeekday(), 1, 4)
      }, mn.quarter = mn.quarters = function(e) {
        return null == e ? Math.ceil((this.month() + 1) / 3) : this.month(3 * (e - 1) + this.month() % 3)
      }, mn.month = Ue, mn.daysInMonth = function() {
        return Pe(this.year(), this.month())
      }, mn.week = mn.weeks = function(e) {
        var t = this.localeData().week(this);
        return null == e ? t : this.add(7 * (e - t), "d")
      }, mn.isoWeek = mn.isoWeeks = function(e) {
        var t = Ie(this, 1, 4).week;
        return null == e ? t : this.add(7 * (e - t), "d")
      }, mn.weeksInYear = function() {
        var e = this.localeData()._week;
        return Ae(this.year(), e.dow, e.doy)
      }, mn.isoWeeksInYear = function() {
        return Ae(this.year(), 1, 4)
      }, mn.date = un, mn.day = mn.days = function(e) {
        if (!this.isValid()) return null != e ? this : NaN;
        var t, n, s = this._isUTC ? this._d.getUTCDay() : this._d.getDay();
        return null != e ? (t = e, n = this.localeData(), e = "string" != typeof t ? t : isNaN(t) ? "number" == typeof(t = n.weekdaysParse(t)) ? t : null : parseInt(t, 10), this.add(e - s, "d")) : s
      }, mn.weekday = function(e) {
        if (!this.isValid()) return null != e ? this : NaN;
        var t = (this.day() + 7 - this.localeData()._week.dow) % 7;
        return null == e ? t : this.add(e - t, "d")
      }, mn.isoWeekday = function(e) {
        if (!this.isValid()) return null != e ? this : NaN;
        if (null == e) return this.day() || 7;
        var t, n, s = (t = e, n = this.localeData(), "string" == typeof t ? n.weekdaysParse(t) % 7 || 7 : isNaN(t) ? null : t);
        return this.day(this.day() % 7 ? s : s - 7)
      }, mn.dayOfYear = function(e) {
        var t = Math.round((this.clone().startOf("day") - this.clone().startOf("year")) / 864e5) + 1;
        return null == e ? t : this.add(e - t, "d")
      }, mn.hour = mn.hours = nt, mn.minute = mn.minutes = ln, mn.second = mn.seconds = dn, mn.millisecond = mn.milliseconds = fn, mn.utcOffset = function(e, t, n) {
        var s, i = this._offset || 0;
        if (!this.isValid()) return null != e ? this : NaN;
        if (null == e) return this._isUTC ? i : Vt(this);
        if ("string" == typeof e) {
          if (null === (e = Nt(re, e))) return this
        } else Math.abs(e) < 16 && !n && (e *= 60);
        return !this._isUTC && t && (s = Vt(this)), this._offset = e, this._isUTC = !0, null != s && this.add(s, "m"), i !== e && (!t || this._changeInProgress ? qt(this, jt(e - i, "m"), 1, !1) : this._changeInProgress || (this._changeInProgress = !0, c.updateOffset(this, !0), this._changeInProgress = null)), this
      }, mn.utc = function(e) {
        return this.utcOffset(0, e)
      }, mn.local = function(e) {
        return this._isUTC && (this.utcOffset(0, e), this._isUTC = !1, e && this.subtract(Vt(this), "m")), this
      }, mn.parseZone = function() {
        if (null != this._tzm) this.utcOffset(this._tzm, !1, !0);
        else if ("string" == typeof this._i) {
          var e = Nt(ie, this._i);
          null != e ? this.utcOffset(e) : this.utcOffset(0, !0)
        }
        return this
      }, mn.hasAlignedHourOffset = function(e) {
        return !!this.isValid() && (e = e ? bt(e).utcOffset() : 0, (this.utcOffset() - e) % 60 == 0)
      }, mn.isDST = function() {
        return this.utcOffset() > this.clone().month(0).utcOffset() || this.utcOffset() > this.clone().month(5).utcOffset()
      }, mn.isLocal = function() {
        return !!this.isValid() && !this._isUTC
      }, mn.isUtcOffset = function() {
        return !!this.isValid() && this._isUTC
      }, mn.isUtc = Et, mn.isUTC = Et, mn.zoneAbbr = function() {
        return this._isUTC ? "UTC" : ""
      }, mn.zoneName = function() {
        return this._isUTC ? "Coordinated Universal Time" : ""
      }, mn.dates = n("dates accessor is deprecated. Use date instead.", un), mn.months = n("months accessor is deprecated. Use month instead", Ue), mn.years = n("years accessor is deprecated. Use year instead", Oe), mn.zone = n("moment().zone is deprecated, use moment().utcOffset instead. http://momentjs.com/guides/#/warnings/zone/", function(e, t) {
        return null != e ? ("string" != typeof e && (e = -e), this.utcOffset(e, t), this) : -this.utcOffset()
      }), mn.isDSTShifted = n("isDSTShifted is deprecated. See http://momentjs.com/guides/#/warnings/dst-shifted/ for more information", function() {
        if (!l(this._isDSTShifted)) return this._isDSTShifted;
        var e = {};
        if (w(e, this), (e = Ot(e))._a) {
          var t = e._isUTC ? y(e._a) : bt(e._a);
          this._isDSTShifted = this.isValid() && 0 < a(e._a, t.toArray())
        } else this._isDSTShifted = !1;
        return this._isDSTShifted
      });
      var yn = P.prototype;

      function gn(e, t, n, s) {
        var i = ht(),
          r = y().set(s, t);
        return i[n](r, e)
      }

      function vn(e, t, n) {
        if (h(e) && (t = e, e = void 0), e = e || "", null != t) return gn(e, t, n, "month");
        var s, i = [];
        for (s = 0; s < 12; s++) i[s] = gn(e, s, n, "month");
        return i
      }

      function pn(e, t, n, s) {
        t = ("boolean" == typeof e ? h(t) && (n = t, t = void 0) : (t = e, e = !1, h(n = t) && (n = t, t = void 0)), t || "");
        var i, r = ht(),
          a = e ? r._week.dow : 0;
        if (null != n) return gn(t, (n + a) % 7, s, "day");
        var o = [];
        for (i = 0; i < 7; i++) o[i] = gn(t, (i + a) % 7, s, "day");
        return o
      }
      yn.calendar = function(e, t, n) {
        var s = this._calendar[e] || this._calendar.sameElse;
        return b(s) ? s.call(t, n) : s
      }, yn.longDateFormat = function(e) {
        var t = this._longDateFormat[e],
          n = this._longDateFormat[e.toUpperCase()];
        return t || !n ? t : (this._longDateFormat[e] = n.replace(/MMMM|MM|DD|dddd/g, function(e) {
          return e.slice(1)
        }), this._longDateFormat[e])
      }, yn.invalidDate = function() {
        return this._invalidDate
      }, yn.ordinal = function(e) {
        return this._ordinal.replace("%d", e)
      }, yn.preparse = _n, yn.postformat = _n, yn.relativeTime = function(e, t, n, s) {
        var i = this._relativeTime[n];
        return b(i) ? i(e, t, n, s) : i.replace(/%d/i, e)
      }, yn.pastFuture = function(e, t) {
        var n = this._relativeTime[0 < e ? "future" : "past"];
        return b(n) ? n(t) : n.replace(/%s/i, t)
      }, yn.set = function(e) {
        var t, n;
        for (n in e) b(t = e[n]) ? this[n] = t : this["_" + n] = t;
        this._config = e, this._dayOfMonthOrdinalParseLenient = new RegExp((this._dayOfMonthOrdinalParse.source || this._ordinalParse.source) + "|" + /\d{1,2}/.source)
      }, yn.months = function(e, t) {
        return e ? o(this._months) ? this._months[e.month()] : this._months[(this._months.isFormat || We).test(t) ? "format" : "standalone"][e.month()] : o(this._months) ? this._months : this._months.standalone
      }, yn.monthsShort = function(e, t) {
        return e ? o(this._monthsShort) ? this._monthsShort[e.month()] : this._monthsShort[We.test(t) ? "format" : "standalone"][e.month()] : o(this._monthsShort) ? this._monthsShort : this._monthsShort.standalone
      }, yn.monthsParse = function(e, t, n) {
        var s, i, r;
        if (this._monthsParseExact) return function(e, t, n) {
          var s, i, r, a = e.toLocaleLowerCase();
          if (!this._monthsParse)
            for (this._monthsParse = [], this._longMonthsParse = [], this._shortMonthsParse = [], s = 0; s < 12; ++s) r = y([2e3, s]), this._shortMonthsParse[s] = this.monthsShort(r, "").toLocaleLowerCase(), this._longMonthsParse[s] = this.months(r, "").toLocaleLowerCase();
          return n ? "MMM" === t ? -1 !== (i = Ye.call(this._shortMonthsParse, a)) ? i : null : -1 !== (i = Ye.call(this._longMonthsParse, a)) ? i : null : "MMM" === t ? -1 !== (i = Ye.call(this._shortMonthsParse, a)) ? i : -1 !== (i = Ye.call(this._longMonthsParse, a)) ? i : null : -1 !== (i = Ye.call(this._longMonthsParse, a)) ? i : -1 !== (i = Ye.call(this._shortMonthsParse, a)) ? i : null
        }.call(this, e, t, n);
        for (this._monthsParse || (this._monthsParse = [], this._longMonthsParse = [], this._shortMonthsParse = []), s = 0; s < 12; s++) {
          if (i = y([2e3, s]), n && !this._longMonthsParse[s] && (this._longMonthsParse[s] = new RegExp("^" + this.months(i, "").replace(".", "") + "$", "i"), this._shortMonthsParse[s] = new RegExp("^" + this.monthsShort(i, "").replace(".", "") + "$", "i")), n || this._monthsParse[s] || (r = "^" + this.months(i, "") + "|^" + this.monthsShort(i, ""), this._monthsParse[s] = new RegExp(r.replace(".", ""), "i")), n && "MMMM" === t && this._longMonthsParse[s].test(e)) return s;
          if (n && "MMM" === t && this._shortMonthsParse[s].test(e)) return s;
          if (!n && this._monthsParse[s].test(e)) return s
        }
      }, yn.monthsRegex = function(e) {
        return this._monthsParseExact ? (m(this, "_monthsRegex") || Ne.call(this), e ? this._monthsStrictRegex : this._monthsRegex) : (m(this, "_monthsRegex") || (this._monthsRegex = Le), this._monthsStrictRegex && e ? this._monthsStrictRegex : this._monthsRegex)
      }, yn.monthsShortRegex = function(e) {
        return this._monthsParseExact ? (m(this, "_monthsRegex") || Ne.call(this), e ? this._monthsShortStrictRegex : this._monthsShortRegex) : (m(this, "_monthsShortRegex") || (this._monthsShortRegex = Fe), this._monthsShortStrictRegex && e ? this._monthsShortStrictRegex : this._monthsShortRegex)
      }, yn.week = function(e) {
        return Ie(e, this._week.dow, this._week.doy).week
      }, yn.firstDayOfYear = function() {
        return this._week.doy
      }, yn.firstDayOfWeek = function() {
        return this._week.dow
      }, yn.weekdays = function(e, t) {
        var n = o(this._weekdays) ? this._weekdays : this._weekdays[e && !0 !== e && this._weekdays.isFormat.test(t) ? "format" : "standalone"];
        return !0 === e ? je(n, this._week.dow) : e ? n[e.day()] : n
      }, yn.weekdaysMin = function(e) {
        return !0 === e ? je(this._weekdaysMin, this._week.dow) : e ? this._weekdaysMin[e.day()] : this._weekdaysMin
      }, yn.weekdaysShort = function(e) {
        return !0 === e ? je(this._weekdaysShort, this._week.dow) : e ? this._weekdaysShort[e.day()] : this._weekdaysShort
      }, yn.weekdaysParse = function(e, t, n) {
        var s, i, r;
        if (this._weekdaysParseExact) return function(e, t, n) {
          var s, i, r, a = e.toLocaleLowerCase();
          if (!this._weekdaysParse)
            for (this._weekdaysParse = [], this._shortWeekdaysParse = [], this._minWeekdaysParse = [], s = 0; s < 7; ++s) r = y([2e3, 1]).day(s), this._minWeekdaysParse[s] = this.weekdaysMin(r, "").toLocaleLowerCase(), this._shortWeekdaysParse[s] = this.weekdaysShort(r, "").toLocaleLowerCase(), this._weekdaysParse[s] = this.weekdays(r, "").toLocaleLowerCase();
          return n ? "dddd" === t ? -1 !== (i = Ye.call(this._weekdaysParse, a)) ? i : null : "ddd" === t ? -1 !== (i = Ye.call(this._shortWeekdaysParse, a)) ? i : null : -1 !== (i = Ye.call(this._minWeekdaysParse, a)) ? i : null : "dddd" === t ? -1 !== (i = Ye.call(this._weekdaysParse, a)) ? i : -1 !== (i = Ye.call(this._shortWeekdaysParse, a)) ? i : -1 !== (i = Ye.call(this._minWeekdaysParse, a)) ? i : null : "ddd" === t ? -1 !== (i = Ye.call(this._shortWeekdaysParse, a)) ? i : -1 !== (i = Ye.call(this._weekdaysParse, a)) ? i : -1 !== (i = Ye.call(this._minWeekdaysParse, a)) ? i : null : -1 !== (i = Ye.call(this._minWeekdaysParse, a)) ? i : -1 !== (i = Ye.call(this._weekdaysParse, a)) ? i : -1 !== (i = Ye.call(this._shortWeekdaysParse, a)) ? i : null
        }.call(this, e, t, n);
        for (this._weekdaysParse || (this._weekdaysParse = [], this._minWeekdaysParse = [], this._shortWeekdaysParse = [], this._fullWeekdaysParse = []), s = 0; s < 7; s++) {
          if (i = y([2e3, 1]).day(s), n && !this._fullWeekdaysParse[s] && (this._fullWeekdaysParse[s] = new RegExp("^" + this.weekdays(i, "").replace(".", "\\.?") + "$", "i"), this._shortWeekdaysParse[s] = new RegExp("^" + this.weekdaysShort(i, "").replace(".", "\\.?") + "$", "i"), this._minWeekdaysParse[s] = new RegExp("^" + this.weekdaysMin(i, "").replace(".", "\\.?") + "$", "i")), this._weekdaysParse[s] || (r = "^" + this.weekdays(i, "") + "|^" + this.weekdaysShort(i, "") + "|^" + this.weekdaysMin(i, ""), this._weekdaysParse[s] = new RegExp(r.replace(".", ""), "i")), n && "dddd" === t && this._fullWeekdaysParse[s].test(e)) return s;
          if (n && "ddd" === t && this._shortWeekdaysParse[s].test(e)) return s;
          if (n && "dd" === t && this._minWeekdaysParse[s].test(e)) return s;
          if (!n && this._weekdaysParse[s].test(e)) return s
        }
      }, yn.weekdaysRegex = function(e) {
        return this._weekdaysParseExact ? (m(this, "_weekdaysRegex") || Qe.call(this), e ? this._weekdaysStrictRegex : this._weekdaysRegex) : (m(this, "_weekdaysRegex") || (this._weekdaysRegex = qe), this._weekdaysStrictRegex && e ? this._weekdaysStrictRegex : this._weekdaysRegex)
      }, yn.weekdaysShortRegex = function(e) {
        return this._weekdaysParseExact ? (m(this, "_weekdaysRegex") || Qe.call(this), e ? this._weekdaysShortStrictRegex : this._weekdaysShortRegex) : (m(this, "_weekdaysShortRegex") || (this._weekdaysShortRegex = Je), this._weekdaysShortStrictRegex && e ? this._weekdaysShortStrictRegex : this._weekdaysShortRegex)
      }, yn.weekdaysMinRegex = function(e) {
        return this._weekdaysParseExact ? (m(this, "_weekdaysRegex") || Qe.call(this), e ? this._weekdaysMinStrictRegex : this._weekdaysMinRegex) : (m(this, "_weekdaysMinRegex") || (this._weekdaysMinRegex = Be), this._weekdaysMinStrictRegex && e ? this._weekdaysMinStrictRegex : this._weekdaysMinRegex)
      }, yn.isPM = function(e) {
        return "p" === (e + "").toLowerCase().charAt(0)
      }, yn.meridiem = function(e, t, n) {
        return 11 < e ? n ? "pm" : "PM" : n ? "am" : "AM"
      }, ut("en", {
        dayOfMonthOrdinalParse: /\d{1,2}(th|st|nd|rd)/,
        ordinal: function(e) {
          var t = e % 10;
          return e + (1 === D(e % 100 / 10) ? "th" : 1 === t ? "st" : 2 === t ? "nd" : 3 === t ? "rd" : "th")
        }
      }), c.lang = n("moment.lang is deprecated. Use moment.locale instead.", ut), c.langData = n("moment.langData is deprecated. Use moment.localeData instead.", ht);
      var wn = Math.abs;

      function Mn(e, t, n, s) {
        var i = jt(t, n);
        return e._milliseconds += s * i._milliseconds, e._days += s * i._days, e._months += s * i._months, e._bubble()
      }

      function kn(e) {
        return e < 0 ? Math.floor(e) : Math.ceil(e)
      }

      function Sn(e) {
        return 4800 * e / 146097
      }

      function Dn(e) {
        return 146097 * e / 4800
      }

      function Yn(e) {
        return function() {
          return this.as(e)
        }
      }
      var On = Yn("ms"),
        Tn = Yn("s"),
        bn = Yn("m"),
        xn = Yn("h"),
        Pn = Yn("d"),
        Wn = Yn("w"),
        Cn = Yn("M"),
        Hn = Yn("Q"),
        Rn = Yn("y");

      function Un(e) {
        return function() {
          return this.isValid() ? this._data[e] : NaN
        }
      }
      var Fn = Un("milliseconds"),
        Ln = Un("seconds"),
        Nn = Un("minutes"),
        Gn = Un("hours"),
        Vn = Un("days"),
        En = Un("months"),
        In = Un("years");
      var An = Math.round,
        jn = {
          ss: 44,
          s: 45,
          m: 45,
          h: 22,
          d: 26,
          M: 11
        };
      var Zn = Math.abs;

      function zn(e) {
        return (0 < e) - (e < 0) || +e
      }

      function $n() {
        if (!this.isValid()) return this.localeData().invalidDate();
        var e, t, n = Zn(this._milliseconds) / 1e3,
          s = Zn(this._days),
          i = Zn(this._months);
        t = S((e = S(n / 60)) / 60), n %= 60, e %= 60;
        var r = S(i / 12),
          a = i %= 12,
          o = s,
          u = t,
          l = e,
          h = n ? n.toFixed(3).replace(/\.?0+$/, "") : "",
          d = this.asSeconds();
        if (!d) return "P0D";
        var c = d < 0 ? "-" : "",
          f = zn(this._months) !== zn(d) ? "-" : "",
          m = zn(this._days) !== zn(d) ? "-" : "",
          _ = zn(this._milliseconds) !== zn(d) ? "-" : "";
        return c + "P" + (r ? f + r + "Y" : "") + (a ? f + a + "M" : "") + (o ? m + o + "D" : "") + (u || l || h ? "T" : "") + (u ? _ + u + "H" : "") + (l ? _ + l + "M" : "") + (h ? _ + h + "S" : "")
      }
      var qn = Ht.prototype;
      return qn.isValid = function() {
        return this._isValid
      }, qn.abs = function() {
        var e = this._data;
        return this._milliseconds = wn(this._milliseconds), this._days = wn(this._days), this._months = wn(this._months), e.milliseconds = wn(e.milliseconds), e.seconds = wn(e.seconds), e.minutes = wn(e.minutes), e.hours = wn(e.hours), e.months = wn(e.months), e.years = wn(e.years), this
      }, qn.add = function(e, t) {
        return Mn(this, e, t, 1)
      }, qn.subtract = function(e, t) {
        return Mn(this, e, t, -1)
      }, qn.as = function(e) {
        if (!this.isValid()) return NaN;
        var t, n, s = this._milliseconds;
        if ("month" === (e = H(e)) || "quarter" === e || "year" === e) switch (t = this._days + s / 864e5, n = this._months + Sn(t), e) {
          case "month":
            return n;
          case "quarter":
            return n / 3;
          case "year":
            return n / 12
        } else switch (t = this._days + Math.round(Dn(this._months)), e) {
          case "week":
            return t / 7 + s / 6048e5;
          case "day":
            return t + s / 864e5;
          case "hour":
            return 24 * t + s / 36e5;
          case "minute":
            return 1440 * t + s / 6e4;
          case "second":
            return 86400 * t + s / 1e3;
          case "millisecond":
            return Math.floor(864e5 * t) + s;
          default:
            throw new Error("Unknown unit " + e)
        }
      }, qn.asMilliseconds = On, qn.asSeconds = Tn, qn.asMinutes = bn, qn.asHours = xn, qn.asDays = Pn, qn.asWeeks = Wn, qn.asMonths = Cn, qn.asQuarters = Hn, qn.asYears = Rn, qn.valueOf = function() {
        return this.isValid() ? this._milliseconds + 864e5 * this._days + this._months % 12 * 2592e6 + 31536e6 * D(this._months / 12) : NaN
      }, qn._bubble = function() {
        var e, t, n, s, i, r = this._milliseconds,
          a = this._days,
          o = this._months,
          u = this._data;
        return 0 <= r && 0 <= a && 0 <= o || r <= 0 && a <= 0 && o <= 0 || (r += 864e5 * kn(Dn(o) + a), o = a = 0), u.milliseconds = r % 1e3, e = S(r / 1e3), u.seconds = e % 60, t = S(e / 60), u.minutes = t % 60, n = S(t / 60), u.hours = n % 24, o += i = S(Sn(a += S(n / 24))), a -= kn(Dn(i)), s = S(o / 12), o %= 12, u.days = a, u.months = o, u.years = s, this
      }, qn.clone = function() {
        return jt(this)
      }, qn.get = function(e) {
        return e = H(e), this.isValid() ? this[e + "s"]() : NaN
      }, qn.milliseconds = Fn, qn.seconds = Ln, qn.minutes = Nn, qn.hours = Gn, qn.days = Vn, qn.weeks = function() {
        return S(this.days() / 7)
      }, qn.months = En, qn.years = In, qn.humanize = function(e) {
        if (!this.isValid()) return this.localeData().invalidDate();
        var t, n, s, i, r, a, o, u, l, h, d, c = this.localeData(),
          f = (n = !e, s = c, i = jt(t = this).abs(), r = An(i.as("s")), a = An(i.as("m")), o = An(i.as("h")), u = An(i.as("d")), l = An(i.as("M")), h = An(i.as("y")), (d = r <= jn.ss && ["s", r] || r < jn.s && ["ss", r] || a <= 1 && ["m"] || a < jn.m && ["mm", a] || o <= 1 && ["h"] || o < jn.h && ["hh", o] || u <= 1 && ["d"] || u < jn.d && ["dd", u] || l <= 1 && ["M"] || l < jn.M && ["MM", l] || h <= 1 && ["y"] || ["yy", h])[2] = n, d[3] = 0 < +t, d[4] = s, function(e, t, n, s, i) {
            return i.relativeTime(t || 1, !!n, e, s)
          }.apply(null, d));
        return e && (f = c.pastFuture(+this, f)), c.postformat(f)
      }, qn.toISOString = $n, qn.toString = $n, qn.toJSON = $n, qn.locale = Xt, qn.localeData = en, qn.toIsoString = n("toIsoString() is deprecated. Please use toISOString() instead (notice the capitals)", $n), qn.lang = Kt, I("X", 0, 0, "unix"), I("x", 0, 0, "valueOf"), ue("x", se), ue("X", /[+-]?\d+(\.\d{1,3})?/), ce("X", function(e, t, n) {
        n._d = new Date(1e3 * parseFloat(e, 10))
      }), ce("x", function(e, t, n) {
        n._d = new Date(D(e))
      }), c.version = "2.24.0", e = bt, c.fn = mn, c.min = function() {
        return Wt("isBefore", [].slice.call(arguments, 0))
      }, c.max = function() {
        return Wt("isAfter", [].slice.call(arguments, 0))
      }, c.now = function() {
        return Date.now ? Date.now() : +new Date
      }, c.utc = y, c.unix = function(e) {
        return bt(1e3 * e)
      }, c.months = function(e, t) {
        return vn(e, t, "months")
      }, c.isDate = d, c.locale = ut, c.invalid = p, c.duration = jt, c.isMoment = k, c.weekdays = function(e, t, n) {
        return pn(e, t, n, "weekdays")
      }, c.parseZone = function() {
        return bt.apply(null, arguments).parseZone()
      }, c.localeData = ht, c.isDuration = Rt, c.monthsShort = function(e, t) {
        return vn(e, t, "monthsShort")
      }, c.weekdaysMin = function(e, t, n) {
        return pn(e, t, n, "weekdaysMin")
      }, c.defineLocale = lt, c.updateLocale = function(e, t) {
        if (null != t) {
          var n, s, i = st;
          null != (s = ot(e)) && (i = s._config), (n = new P(t = x(i, t))).parentLocale = it[e], it[e] = n, ut(e)
        } else null != it[e] && (null != it[e].parentLocale ? it[e] = it[e].parentLocale : null != it[e] && delete it[e]);
        return it[e]
      }, c.locales = function() {
        return s(it)
      }, c.weekdaysShort = function(e, t, n) {
        return pn(e, t, n, "weekdaysShort")
      }, c.normalizeUnits = H, c.relativeTimeRounding = function(e) {
        return void 0 === e ? An : "function" == typeof e && (An = e, !0)
      }, c.relativeTimeThreshold = function(e, t) {
        return void 0 !== jn[e] && (void 0 === t ? jn[e] : (jn[e] = t, "s" === e && (jn.ss = t - 1), !0))
      }, c.calendarFormat = function(e, t) {
        var n = e.diff(t, "days", !0);
        return n < -6 ? "sameElse" : n < -1 ? "lastWeek" : n < 0 ? "lastDay" : n < 1 ? "sameDay" : n < 2 ? "nextDay" : n < 7 ? "nextWeek" : "sameElse"
      }, c.prototype = mn, c.HTML5_FMT = {
        DATETIME_LOCAL: "YYYY-MM-DDTHH:mm",
        DATETIME_LOCAL_SECONDS: "YYYY-MM-DDTHH:mm:ss",
        DATETIME_LOCAL_MS: "YYYY-MM-DDTHH:mm:ss.SSS",
        DATE: "YYYY-MM-DD",
        TIME: "HH:mm",
        TIME_SECONDS: "HH:mm:ss",
        TIME_MS: "HH:mm:ss.SSS",
        WEEK: "GGGG-[W]WW",
        MONTH: "YYYY-MM"
      }, c
    });
    $(document).ready(function() {
      $("#sager").html(moment().format('MMMM Do YYYY, h:mm:ss a'));

      $("#ddted").modal('show');
      $(".edited").click(function(event) {
        $("#vlad").modal('show');
        let grunty = event.target.id;
        $("#fg").val($('#' + grunty).data('edit'));
        $("#ratef").val($('#' + grunty).data('ridge'));

      });
    });
    $(".cart_modal").modal("show");
  </script>



</body>

</html>