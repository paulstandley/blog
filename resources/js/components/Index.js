import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Post from './Post';

export default class Index extends Component {
    constructor(props) {
        super(props);
        this.state = { 
            post: null
         };
    }
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">Blog Posts</div>

                            <div className="card-body">
                                <Post />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('Index')) {
    ReactDOM.render(<Index />, document.getElementById('Index'));
}
