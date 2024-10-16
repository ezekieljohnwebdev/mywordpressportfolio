( function( api ) {

	// Extends our custom "digital-marketing-elementor" section.
	api.sectionConstructor['digital-marketing-elementor'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );