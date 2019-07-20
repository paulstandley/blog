import React, { Component } from 'react';

export default class FormCreate extends Component {

    render() {
        return (
            <React.Fragment>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Title"/>
                </div>
                <div class="form-group">      
                    <label for="textarea">Blog</label>
                    <textarea class="form-control" name="body" id="textarea" rows="19" placeholder="Blog"></textarea>
                </div>
                <input type="submit" className="btn btn-primary"/>
            </React.Fragment>
        );
    }
}