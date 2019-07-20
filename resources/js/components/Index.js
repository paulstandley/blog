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

if (document.getElementById('Index')) {
    ReactDOM.render(<Index />, document.getElementById('Index'));
}
