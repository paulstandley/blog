import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Post from './Post';

export default class Index extends Component {
    constructor(props) {
        super(props);
        this.state = { 
            post: true
         };
    }
    render() {
        return (
            <div className="container">
				{this.state.post ? <Post /> : <h3>No Post</h3> }
            </div>
        );
    }
}

if (document.getElementById('Index')) {
    ReactDOM.render(<Index />, document.getElementById('Index'));
}
