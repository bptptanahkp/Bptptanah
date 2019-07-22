var pesanIsotope = $('.pesan-container').isotope({
    itemSelector: '.pesan-item',
    layoutMode: 'fitRows'
  });

  $('#pesan-flters li').on( 'click', function() {
    $("#pesan-flters li").removeClass('filter-active');
    $(this).addClass('filter-active');

    pesanIsotope.isotope({ filter: $(this).data('filter') });
  });
