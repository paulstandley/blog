import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Post from './Post';
import FormCreate from './FormCreate';

export default class Index extends Component {
    constructor(props) {
        super(props);
        this.state = { 
            post: false,
            form: true
         };
    }
    render() {
        return (
            <div>
                {this.state.form ? <FormCreate /> : null }
            </div>
        );
    }
}

 /* I wish I had come up with this but Elharony did he did great so simple */
 function renderScripElement(srcUrl) {
    /* make sure its the first script tag make a script tag add atrrs */  
      const firstChildScriptTag = window.document.getElementsByTagName('script')[0];
      //const secondChildScriptTag = window.document.getElementsByTagName('script')[1];
      const scriptTag = window.document.createElement('script');
      //const scriptTag1 = window.document.createElement('script');
      scriptTag.src = srcUrl;
      scriptTag.defer = true;  
      scriptTag.async = true;
      /*const name = `
      ${function gm_authFailure() {
        window.alert("Google Maps error!");
      }}`;*/
      
    /* then place it in the dom as a first child */ 
      firstChildScriptTag.parentNode.insertBefore(scriptTag, firstChildScriptTag);
      //secondChildScriptTag.parentNode.insertBefore(scriptTag1, secondChildScriptTag);
      //secondChildScriptTag.parentNode.insertBefore(inside, secondChildScriptTag);
    }
    /* call render scrip and pass in google map url and api key */
    renderScripElement('https://maps.googleapis.com/maps/api/js?key=AIzaSyDcheCgHTyf9zr3vcCCSOo0wrq_W95sUcA&callback=initMap');

if (document.getElementById('Index')) {
    ReactDOM.render(<Index />, document.getElementById('Index'));
}
