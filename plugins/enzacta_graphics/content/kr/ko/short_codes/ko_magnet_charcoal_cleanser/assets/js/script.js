(function () {
  var root = document.getElementById('enzkr-cover');
  if (!root) return;

  var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  var stats = root.querySelectorAll('.enzkr-stat');

  function animateCount(el) {
    var target = parseFloat(el.getAttribute('data-value'));
    var decimals = parseInt(el.getAttribute('data-decimals') || '0', 10);
    var suffix = el.getAttribute('data-suffix') || '';
    var valueEl = el.querySelector('.enzkr-stat__value');
    if (reduceMotion || !valueEl) {
      if (valueEl) valueEl.textContent = target.toFixed(decimals) + suffix;
      el.classList.add('is-visible');
      return;
    }
    el.classList.add('is-visible');
    var duration = 1400;
    var start = null;
    function step(ts) {
      if (start === null) start = ts;
      var progress = Math.min((ts - start) / duration, 1);
      var eased = 1 - Math.pow(1 - progress, 3);
      var current = target * eased;
      valueEl.textContent = current.toFixed(decimals) + suffix;
      if (progress < 1) {
        requestAnimationFrame(step);
      } else {
        valueEl.textContent = target.toFixed(decimals) + suffix;
      }
    }
    requestAnimationFrame(step);
  }

  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          animateCount(entry.target);
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.4 });
    stats.forEach(function (el) { io.observe(el); });
  } else {
    stats.forEach(animateCount);
  }

  var problemBadges = root.querySelectorAll('.enzkr-problem__badge');
  if (problemBadges.length) {
    if (reduceMotion) {
      problemBadges.forEach(function (el) { el.classList.add('is-visible'); });
    } else if ('IntersectionObserver' in window) {
      var badgeIo = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            badgeIo.unobserve(entry.target);
          }
        });
      }, { threshold: 0.4 });
      problemBadges.forEach(function (el) { badgeIo.observe(el); });
    } else {
      problemBadges.forEach(function (el) { el.classList.add('is-visible'); });
    }
  }

  var pointReveals = root.querySelectorAll('.enzkr-point__card, .enzkr-point__mini');
  if (pointReveals.length) {
    if (reduceMotion) {
      pointReveals.forEach(function (el) { el.classList.add('is-visible'); });
    } else if ('IntersectionObserver' in window) {
      var pointIo = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            pointIo.unobserve(entry.target);
          }
        });
      }, { threshold: 0.2 });
      pointReveals.forEach(function (el) { pointIo.observe(el); });
    } else {
      pointReveals.forEach(function (el) { el.classList.add('is-visible'); });
    }
  }

  var ingredientCards = root.querySelectorAll('.enzkr-point2__card');
  if (ingredientCards.length) {
    if (reduceMotion) {
      ingredientCards.forEach(function (el) { el.classList.add('is-visible'); });
    } else if ('IntersectionObserver' in window) {
      var cardIo = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            cardIo.unobserve(entry.target);
          }
        });
      }, { threshold: 0.2 });
      ingredientCards.forEach(function (el) { cardIo.observe(el); });
    } else {
      ingredientCards.forEach(function (el) { el.classList.add('is-visible'); });
    }
  }

  var barFills = root.querySelectorAll('.enzkr-point__bar--dark .enzkr-point__bar-fill');
  if (barFills.length) {
    if (reduceMotion) {
      barFills.forEach(function (el) { el.style.width = (el.getAttribute('data-width') || '0') + '%'; });
    } else if ('IntersectionObserver' in window) {
      var barIo = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            var el = entry.target;
            var target = el.getAttribute('data-width') || '0';
            requestAnimationFrame(function () { el.style.width = target + '%'; });
            barIo.unobserve(el);
          }
        });
      }, { threshold: 0.4 });
      barFills.forEach(function (el) { barIo.observe(el); });
    } else {
      barFills.forEach(function (el) { el.style.width = (el.getAttribute('data-width') || '0') + '%'; });
    }
  }

  var trialCards = root.querySelectorAll('.enzkr-point3__card');
  if (trialCards.length) {
    if (reduceMotion) {
      trialCards.forEach(function (el) { el.classList.add('is-visible'); });
    } else if ('IntersectionObserver' in window) {
      var trialIo = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            trialIo.unobserve(entry.target);
          }
        });
      }, { threshold: 0.2 });
      trialCards.forEach(function (el) { trialIo.observe(el); });
    } else {
      trialCards.forEach(function (el) { el.classList.add('is-visible'); });
    }
  }

  var trialStats = root.querySelectorAll('.enzkr-point3__stat');
  function animateTrialStat(el) {
    var target = parseFloat(el.getAttribute('data-value'));
    var decimals = parseInt(el.getAttribute('data-decimals') || '0', 10);
    var suffix = el.getAttribute('data-suffix') || '';
    var valueEl = el.querySelector('.enzkr-point3__stat-value');
    if (reduceMotion || !valueEl) {
      if (valueEl) valueEl.textContent = target.toFixed(decimals) + suffix;
      return;
    }
    var duration = 1400;
    var start = null;
    function step(ts) {
      if (start === null) start = ts;
      var progress = Math.min((ts - start) / duration, 1);
      var eased = 1 - Math.pow(1 - progress, 3);
      valueEl.textContent = (target * eased).toFixed(decimals) + suffix;
      if (progress < 1) {
        requestAnimationFrame(step);
      } else {
        valueEl.textContent = target.toFixed(decimals) + suffix;
      }
    }
    requestAnimationFrame(step);
  }
  if (trialStats.length) {
    if ('IntersectionObserver' in window) {
      var trialStatIo = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            animateTrialStat(entry.target);
            trialStatIo.unobserve(entry.target);
          }
        });
      }, { threshold: 0.4 });
      trialStats.forEach(function (el) { trialStatIo.observe(el); });
    } else {
      trialStats.forEach(animateTrialStat);
    }
  }

  function showTickWhenFilled(fill, tick, prop) {
    if (!tick) return;
    var done = false;
    function show() {
      if (done) return;
      done = true;
      tick.classList.remove('is-waiting');
      fill.removeEventListener('transitionend', onEnd);
    }
    function onEnd(e) { if (e.propertyName === prop) show(); }
    fill.addEventListener('transitionend', onEnd);
    setTimeout(show, 1500);
  }
  if (!reduceMotion && 'IntersectionObserver' in window) {
    root.querySelectorAll('.enzkr-point3__scale-tick, .enzkr-point3__col-tick').forEach(function (t) {
      t.classList.add('is-waiting');
    });
  }

  var scaleFills = root.querySelectorAll('.enzkr-point3__scale-fill');
  if (scaleFills.length) {
    if (reduceMotion) {
      scaleFills.forEach(function (el) { el.style.width = (el.getAttribute('data-width') || '0') + '%'; });
    } else if ('IntersectionObserver' in window) {
      var scaleIo = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            var el = entry.target;
            var target = el.getAttribute('data-width') || '0';
            showTickWhenFilled(el, el.parentNode.querySelector('.enzkr-point3__scale-tick'), 'width');
            requestAnimationFrame(function () { el.style.width = target + '%'; });
            scaleIo.unobserve(el);
          }
        });
      }, { threshold: 0.4 });
      scaleFills.forEach(function (el) { scaleIo.observe(el); });
    } else {
      scaleFills.forEach(function (el) { el.style.width = (el.getAttribute('data-width') || '0') + '%'; });
    }
  }

  var colFills = root.querySelectorAll('.enzkr-point3__col-fill');
  if (colFills.length) {
    if (reduceMotion) {
      colFills.forEach(function (el) { el.style.height = (el.getAttribute('data-height') || '0') + '%'; });
    } else if ('IntersectionObserver' in window) {
      var colIo = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            var el = entry.target;
            var target = el.getAttribute('data-height') || '0';
            var wrap = el.closest('.enzkr-point3__col-wrap');
            showTickWhenFilled(el, wrap && wrap.querySelector('.enzkr-point3__col-tick'), 'height');
            requestAnimationFrame(function () { el.style.height = target + '%'; });
            colIo.unobserve(el);
          }
        });
      }, { threshold: 0.4 });
      colFills.forEach(function (el) { colIo.observe(el); });
    } else {
      colFills.forEach(function (el) { el.style.height = (el.getAttribute('data-height') || '0') + '%'; });
    }
  }

  var point4Reveals = root.querySelectorAll('.enzkr-point4__callout, .enzkr-point4__card');
  if (point4Reveals.length) {
    if (reduceMotion) {
      point4Reveals.forEach(function (el) { el.classList.add('is-visible'); });
    } else if ('IntersectionObserver' in window) {
      var point4Io = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            point4Io.unobserve(entry.target);
          }
        });
      }, { threshold: 0.3 });
      point4Reveals.forEach(function (el) { point4Io.observe(el); });
    } else {
      point4Reveals.forEach(function (el) { el.classList.add('is-visible'); });
    }
  }

  var point5Card = root.querySelector('.enzkr-point5__card');
  if (point5Card) {
    if (reduceMotion) {
      point5Card.classList.add('is-visible');
    } else if ('IntersectionObserver' in window) {
      var point5Io = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            point5Io.unobserve(entry.target);
          }
        });
      }, { threshold: 0.15 });
      point5Io.observe(point5Card);
    } else {
      point5Card.classList.add('is-visible');
    }
  }

  var point6Reveals = root.querySelectorAll('.enzkr-point6__step, .enzkr-point6__bottle');
  if (point6Reveals.length) {
    if (reduceMotion) {
      point6Reveals.forEach(function (el) { el.classList.add('is-visible'); });
    } else if ('IntersectionObserver' in window) {
      var point6Io = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            point6Io.unobserve(entry.target);
          }
        });
      }, { threshold: 0.2 });
      point6Reveals.forEach(function (el) { point6Io.observe(el); });
    } else {
      point6Reveals.forEach(function (el) { el.classList.add('is-visible'); });
    }
  }

  var ingToggle = root.querySelector('.enzkr-specs__ingredients-toggle');
  var ingText = document.getElementById('enzkr-specs-ingredients-text');
  if (ingToggle && ingText) {
    ingToggle.addEventListener('click', function () {
      var expanded = ingToggle.getAttribute('aria-expanded') === 'true';
      ingToggle.setAttribute('aria-expanded', expanded ? 'false' : 'true');
      ingText.classList.toggle('is-collapsed', expanded);
    });
  }
})();

document.addEventListener('touchstart', function () {}, { passive: true });
